<?php

    // REQUIRED
    // Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
    date_default_timezone_set('Asia/Jakarta');
    // Include the store hours class
    require __DIR__ . '/StoreHours.class.php';

    // REQUIRED
    // Define daily open hours
    // Must be in 24-hour format, separated by dash
    // If closed for the day, leave blank (ex. sunday)
    // If open multiple times in one day, enter time ranges separated by a comma
    $hours = array(
        'mon' => array('07:00-16:00'),
        'tue' => array('07:00-16:00'),
        'wed' => array('07:00-16:00'),
        'thu' => array('07:00-16:00'), // Open late
        'fri' => array('07:00-15:00'),
        'sat' => array(''),
        'sun' => array('') // Closed all day
    );

    // OPTIONAL
    // Add exceptions (great for holidays etc.)
    // MUST be in a format month/day[/year] or [year-]month-day
    // Do not include the year if the exception repeats annually
    $exceptions = array(
        // '2/24'  => array('11:00-18:00'),
        // '10/18' => array('11:00-16:00', '18:00-20:30')
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' and ',
        'format'         => 'g:ia',
        'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
    ); 

    // Instantiate class
    $store_hours = new StoreHours($hours, $exceptions, $config);
    
    // Display open / closed message
    if($store_hours->is_open()) {
        echo "Saat ini anda dapat meminjam ruang. Hari ini layanan peminjaman dapat dilakukan di jam " . $store_hours->hours_today() . ".";
    } else {
        echo "<p style='color=red'>Maaf, untuk saat ini EROL sedang tutup.</p>";
    }

    // Display full list of open hours (for a week without exceptions)
    // echo '<table>';
    // foreach ($store_hours->hours_this_week() as $days => $hours) {
    //     echo '<tr>';
    //     echo '<td>' . $days . '</td>';
    //     echo '<td>' . $hours . '</td>';
    //     echo '</tr>';
    // }
    // echo '</table>';

    // Same list, but group days with identical hours
    // echo '<table>';
    // foreach ($store_hours->hours_this_week(true) as $days => $hours) {
    //     echo '<tr>';
    //     echo '<td>' . $days . '</td>';
    //     echo '<td>' . $hours . '</td>';
    //     echo '</tr>';
    // }
    // echo '</table>';

    ?>