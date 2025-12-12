<?php 
    namespace Html;
    class Code1 {
        public function htmlCode() {
            echo "<p> Hallo world 1</p>";
        }
    }
    class Code2 {
        public function htmlCode() {
            echo "<p> Hallo world 2</p>";
        }
    }

    $code1 = new Code1();
    $code2 = new Code2();

    $code1->htmlCode();
    $code2->htmlCode();
?>