<?php
    include_once "include/module/module.php";
    include_once "include/common/log.php";
    include_once "include/common/fun.php";
    include_once "include/common/file.php";
    include_once "include/common/user.php";
    include_once "include/common/assignment.php";

    //Show the asssignment
    class AssignmentsModule implements Module {
        private $spaceNum;
        private $assignDir;
        private $user;
        static private $FILENAME = "AssignmentNo";
        static private $DOWNLOAD = "AssignmentModule_Download";
        static private $DELETE   = "AssignmentModule_Delete";

        public function __construct($spaceNum, $assignDir, $user) {
            $this->spaceNum   = $spaceNum;
            $this->assignDir  = File::Trim($assignDir);
            $this->user       = $user;
        }

        static public function GetFileName() {
            return self::$FILENAME;
        }

        static public function GetDownloadButton() {
            return self::$DOWNLOAD;
        }

        static public function GetDeleteButton() {
            return self::$DELETE;
        }

        public function Display() {
            $prefix     = Fun::NSpaceStr($this->spaceNum);
            $maxNo = AssignmentFactory::QueryMaxNo();
            if ( is_null($maxNo) ) {
                $maxNo = -1;
            }
            $assignments = AssignmentFactory::Find(0, $maxNo + 1);
            if ( is_null($assignments) || empty($assignments) ) {
                Log::Echo2Web($prefix."<p>No Assignment Available.</p>");
                return;
            }

            $str        = $prefix."<form action = \"".
                          htmlspecialchars($_SERVER["PHP_SELF"]).
                          "\" method = \"post\">\n";
            $str       .= $prefix."    <ul>\n";
            foreach ( $assignments as $a ) {
                $no = $a->GetNo();
                $str   .= $prefix."        <li>\n";
                $str   .= $prefix."            <input type = \"radio\" name = \"".
                          self::$FILENAME."\" value = \"".
                          $no."\" required>".
                          $a->GetName().".".$a->GetDocumentType()."\n";
                $str   .= $prefix."        </li>\n";
            }
            $str       .= $prefix."    </ul><br>\n";
            $str       .= $prefix."    <input type = \"submit\" ".
                          "id = \"Assignment_download\" name = \"".
                          self::$DOWNLOAD."\" value = \"Download\">\n";
            if ( Admin::GetRole() == $this->user->GetRole() ) {
                $str   .= $prefix."    <input type = \"submit\" ".
                          "id = \"Assignment_delete\" name = \"".
                          self::$DELETE."\" value = \"Delete\">\n";
            }
            $str       .= $prefix."</form>\n";
            Log::RawEcho($str);
        }
    }
?>
