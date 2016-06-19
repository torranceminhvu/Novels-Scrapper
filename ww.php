<?php
include('simple_html_dom.php');

//ISSTH
define('ISSTH_PATH','http://www.wuxiaworld.com/issth-index/issth-book-5-chapter-');
define('ISSTH', 'issth_curr_chapter.txt');
define('ISSTH_CURR_CHAP', '730');

//DE
define('DE_PATH', 'http://www.wuxiaworld.com/desolate-era-index/de-book-14-chapter-');
define('DE', 'de_curr_chapter.txt');
define('DE_CURR_CHAP', '1');

//WDQK
define('WDQK_PATH', 'http://www.wuxiaworld.com/wdqk-index/wdqk-chapter-');
define('WDQK', 'wdqk_curr_chapter.txt');
define('WDQK_CURR_CHAP', '378');

//SOTR
define('SOTR_PATH', 'http://www.wuxiaworld.com/sotr-index/sotr-chapter-');
define('SOTR', 'sotr_curr_chapter.txt');
define('SOTR_CURR_CHAP', '159');

//MGA
define('MGA_PATH', 'http://www.wuxiaworld.com/mga-index/mga-chapter-');
define('MGA', 'mga_curr_chapter.txt');
define('MGA_CURR_CHAP', '788');

//ATG
define('ATG_PATH', 'http://www.wuxiaworld.com/atg-index/atg-chapter-');
define('ATG', 'atg_curr_chapter.txt');
define('ATG_CURR_CHAP', '490');

//TGR
define('TGR_PATH', 'http://www.wuxiaworld.com/tgr-index/tgr-chapter-');
define('TGR', 'tgr_curr_chapter.txt');
define('TGR_CURR_CHAP', '201');

//CSG
define('CSG_PATH', 'http://gravitytales.com/chaotic-sword-god/csg-chapter-');
define('CSG', 'csg_curr_chapter.txt');
define('CSG_CURR_CHAP', '485');

//TMW
define('TMW_PATH', 'http://gravitytales.com/true-martial-world/tmw-chapter-0');
define('TMW', 'tmw_curr_chapter.txt');
define('TMW_CURR_CHAP', '470');

//IRAS
define('IRAS_PATH', 'http://gravitytales.com/im-really-a-superstar/iras-chapter-00');
define('IRAS', 'iras_curr_chapter.txt');
define('IRAS_CURR_CHAP', '87');




/**
 * ISSTH Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(ISSTH, 'r');
if ($file == NULL)
        $file = fopen(ISSTH, 'w+');

if (filesize('./' . ISSTH)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = ISSTH_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(ISSTH, 'w');

//Store path to open browser with
$saved_path = ISSTH_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\nISSTH Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == 'Next Chapter') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}
// Close file
fclose($file);

/**   END OF ISSTH CODE
 *
 */


/**
 * DE Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(DE, 'r');
if ($file == NULL)
        $file = fopen(DE, 'w+');

if (filesize('./' . DE)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = DE_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(DE, 'w');

//Store path to open browser with
$saved_path = DE_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n DE Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == 'Next Chapter') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF DE CODE
 *
 */

/**
 * WDQK Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(WDQK, 'r');
if ($file == NULL)
        $file = fopen(WDQK, 'w+');

if (filesize('./' . WDQK)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = WDQK_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(WDQK, 'w');

//Store path to open browser with
$saved_path = WDQK_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n WDQK Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == 'Next Chapter') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF WDQK CODE
 *
 */

/**
 * SOTR Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(SOTR, 'r');
if ($file == NULL)
        $file = fopen(SOTR, 'w+');

if (filesize('./' . SOTR)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = SOTR_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(SOTR, 'w');

//Store path to open browser with
$saved_path = SOTR_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n SOTR Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == 'Next Chapter') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF SOTR CODE
 *
 */

/**
 * MGA Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(MGA, 'r');
if ($file == NULL)
        $file = fopen(MGA, 'w+');

if (filesize('./' . MGA)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = MGA_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(MGA, 'w');

//Store path to open browser with
$saved_path = MGA_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n MGA Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == 'Next Chapter') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF MGA CODE
 *
 */

/**
 * ATG Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(ATG, 'r');
if ($file == NULL)
        $file = fopen(ATG, 'w+');

if (filesize('./' . ATG)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = ATG_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(ATG, 'w');

//Store path to open browser with
$saved_path = ATG_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n ATG Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 3) {
                        fwrite($file, $curr_chapter - 3);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 3);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == 'Next Chapter') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF ATG CODE
 *
 */

/**
 * TGR Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(TGR, 'r');
if ($file == NULL)
        $file = fopen(TGR, 'w+');

if (filesize('./' . TGR)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = TGR_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(TGR, 'w');

//Store path to open browser with
$saved_path = TGR_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        fwrite($file, $curr_chapter);
        //echo "\n\n TGR Page Doesnt Exists\n";
        fclose($file);
}
else {
        //Count to not open browser if next chapter Not out
        $count = 0;

        // Loops and Get the chapter number for the latest chapter
        $curr_path = $saved_path;
        while ($curr_path != NULL) {
                $html_check = @file_get_html($curr_path);
                if ($html_check == NULL) {         
                        if ($count == 1) {
                                fwrite($file, $curr_chapter);
                                break;
                        }
                        else {
                                exec('start ' . $saved_path);
                                fwrite($file, $curr_chapter);
                                break;
                        }
                }
                foreach ($html_check->find('a') as $a_tag) {
                        if ($a_tag->plaintext == 'Next Chapter') {
                                $curr_path = $a_tag->href;
                                $curr_chapter += 1;
                                $count += 1;
                                echo $curr_path . PHP_EOL;
                                break;
                        }
                }
        }
        // Close file
        fclose($file);
}


/**   END OF TGR CODE
 *
 */

/**
 * CSG Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(CSG, 'r');
if ($file == NULL)
        $file = fopen(CSG, 'w+');

if (filesize('./' . CSG)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = CSG_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(CSG, 'w');

//Store path to open browser with
$saved_path = CSG_PATH . $curr_chapter . '/';

// Get HTML
$html = file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n CSG Page Doesnt Exists\n";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($html_check == NULL) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter - 1);
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == '[Next Chapter]') {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF CSG CODE
 *
 */

/**
 * TMW Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(TMW, 'r');
if ($file == NULL)
        $file = fopen(TMW, 'w+');

if (filesize('./' . TMW)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = TMW_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(TMW, 'w');

//Store path to open browser with
$saved_path = TMW_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n TMW Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$check = 0;
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($check == 1) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter);
                        break;
                }
        }
        foreach ($html_check->find('span') as $span_tag) {
                $string = 'Chapter ' . $curr_chapter . ': ';
                if ($span_tag->innertext == $string) {
                        $check = 1;
                        $count += 1;
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == '[Next Chapter]' && $check == 0) {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF TMW CODE
 *
 */

/**
 * IRAS Code Begins
 */

// open file and see if it exists, if it doesnt create it. If it does then
// read current chapter from it or set it to XXXX
$file = @fopen(IRAS, 'r');
if ($file == NULL)
        $file = fopen(IRAS, 'w+');

if (filesize('./' . IRAS)) {
        $curr_chapter = fgets($file);
}
else {
        $curr_chapter = IRAS_CURR_CHAP;
}
// Close the file and open it so we can write to it
fclose($file);
$file = fopen(IRAS, 'w');

//Store path to open browser with
$saved_path = IRAS_PATH . $curr_chapter . '/';

// Get HTML
$html = @file_get_html($saved_path);

// Check if Page Exists
if ($html == NULL) {
        echo "\n\n IRAS Page Doesnt Exists";
        fclose($file);
        return;
}

//Count to not open browser if next chapter Not out
$check = 0;
$count = 0;

// Loops and Get the chapter number for the latest chapter
$curr_path = $saved_path;
while ($curr_path != NULL) {
        $html_check = @file_get_html($curr_path);
        if ($check == 1) {         
                if ($count == 1) {
                        fwrite($file, $curr_chapter);
                        break;
                }
                else {
                        exec('start ' . $saved_path);
                        fwrite($file, $curr_chapter);
                        break;
                }
        }
        foreach ($html_check->find('span') as $span_tag) {
                $string = 'Chapter ' . $curr_chapter . ': ';
                if ($span_tag->innertext == $string) {
                        $check = 1;
                        $count += 1;
                        break;
                }
        }
        foreach ($html_check->find('a') as $a_tag) {
                if ($a_tag->plaintext == '[Next Chapter]' && $check == 0) {
                        $curr_path = $a_tag->href;
                        $curr_chapter += 1;
                        $count += 1;
                        echo $curr_path . PHP_EOL;
                        break;
                }
        }
}

// Close file
fclose($file);
/**   END OF IRAS CODE
 *
 */
