<?php
    /*
    1. *After reseting, don't forget to replace the old configre as the new configure;
    2. *obviously, if you don't want change anything, just copy the old configure, and rename the class name as NewConfigure.
    */
    class NewConfigure {
        static public $AUTHORS;
        static public $VERSION;

        //course info
        static public $COURSE;
        static public $COURSE_DIR_NAME;
        static public $COURSE_EMAIL;

        //web info
        static public $URL;
        static public $LOGINPAGE;
        static public $CONSOLEPAGE;
        static public $ADMINCONSOLEPAGE;
        static public $INITIALIZATIONPAGE;

        //some important dir
        static public $ROOT_DIR;
        static public $STORE_DIR;
        static public $ADMIN_DIR;
        static public $STUDENT_DIR;
        static public $SHARED_DIR;
        static public $ASSIGNMENTDIR;
        static public $STUDENTNAMELISTFILE;
        static public $ADMINNAMELISTFILE;

        //some important var about database
        static public $DBHOST;
        static public $DBUSER;
        static public $DBPWD;
        static public $DBNAME;
        static public $USERTABLE;
        static public $NEWSTABLE;
        static public $DISCUSSTABLE;
        static public $ASSIGNMENTTABLE;

        //constraint
        static public $UPLOAD_FILE_MAX; /*Byte*/
        static public $SESSION_VALID_TIME; /*second*/

        //encode var
        static public $SALT;

        //Init
        static public function Init() {
            self::$AUTHORS              = "Brayan Tang, QQ Lee, Joe Zheng";
            self::$VERSION              = "1.0";
            self::$COURSE               = "ProbabilityTheory";
            self::$COURSE_DIR_NAME      = "courseweb";
            self::$COURSE_EMAIL         = "probability2017@163.com";
            self::$URL                  = "http://******************/".self::$COURSE_DIR_NAME;
            self::$LOGINPAGE            = "/".self::$COURSE_DIR_NAME."/index.php";
            self::$CONSOLEPAGE          = "/".self::$COURSE_DIR_NAME."/console.php";
            self::$ADMINCONSOLEPAGE     = "/".self::$COURSE_DIR_NAME."/admin.php";
            self::$INITIALIZATIONPAGE   = "/".self::$COURSE_DIR_NAME."/initialization.php";
            self::$ROOT_DIR             = "*************************".self::$COURSE;
            self::$STORE_DIR            = "*************************".self::$COURSE;
            self::$ADMIN_DIR            = self::$STORE_DIR."/admin";
            self::$STUDENT_DIR          = self::$STORE_DIR."/student";
            self::$SHARED_DIR           = self::$STORE_DIR."/shared";
            self::$ASSIGNMENTDIR        = self::$ADMIN_DIR."/Assignment";
            self::$STUDENTNAMELISTFILE  = self::$STORE_DIR."/student_namelist.txt";
            self::$ADMINNAMELISTFILE    = self::$STORE_DIR."/admin_namelist.txt";
            self::$DBHOST               = "127.0.0.1";
            self::$DBUSER               = "root";
            self::$DBPWD                = "****************************";
            self::$DBNAME               = "ProbabilityTheoryDatabase";
            self::$USERTABLE            = "UserTable";
            self::$NEWSTABLE            = "NewsTable";
            self::$DISCUSSTABLE         = "DiscussTable";
            self::$ASSIGNMENTTABLE       = "AssignmentTable";
            self::$UPLOAD_FILE_MAX      = 20971520;
            self::$SESSION_VALID_TIME   = 1000;
            self::$SALT                 = "***************************";
        }
    }
    NewConfigure::Init();
?>
