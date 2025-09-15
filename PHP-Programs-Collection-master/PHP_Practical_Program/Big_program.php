<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .calendar-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .calendar-nav select, .calendar-nav button {
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #e8f0fe;
            transition: background-color 0.3s;
        }
        .calendar-nav select:hover, .calendar-nav button:hover {
            background-color: #cfe4ff;
        }
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 5px;
            text-align: center;
        }
        .calendar .day {
            padding: 12px;
            background-color: #b0c7e0;
            border-radius: 5px;
            font-weight: bold;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .calendar .date {
            padding: 15px;
            background-color: #f0f4f7;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
        }
        .calendar .date:hover {
            background-color: #a1c8ff;
            color: #fff;
        }
        .calendar .date.active {
            background-color: #2b7de9;
            color: #fff;
        }
        .calendar .date.inactive {
            background-color: #ddd;
            color: #bbb;
        }
        .calendar .date.selected {
            background-color: #ff6f61;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dynamic Calendar</h1>
        <div class="calendar-nav">
            <button onclick="changeMonth(-1)">Previous</button>
            <div>
                <select id="yearSelect" onchange="updateCalendar()">
                    <?php
                        $currentYear = date("Y");
                        for ($year = $currentYear - 5; $year <= $currentYear + 5; $year++) {
                            echo "<option value='$year' ".($year == $currentYear ? "selected" : "").">$year</option>";
                        }
                    ?>
                </select>
                <select id="monthSelect" onchange="updateCalendar()">
                    <option value="1" <?php if(date("m") == 1) echo "selected"; ?>>January</option>
                    <option value="2" <?php if(date("m") == 2) echo "selected"; ?>>February</option>
                    <option value="3" <?php if(date("m") == 3) echo "selected"; ?>>March</option>
                    <option value="4" <?php if(date("m") == 4) echo "selected"; ?>>April</option>
                    <option value="5" <?php if(date("m") == 5) echo "selected"; ?>>May</option>
                    <option value="6" <?php if(date("m") == 6) echo "selected"; ?>>June</option>
                    <option value="7" <?php if(date("m") == 7) echo "selected"; ?>>July</option>
                    <option value="8" <?php if(date("m") == 8) echo "selected"; ?>>August</option>
                    <option value="9" <?php if(date("m") == 9) echo "selected"; ?>>September</option>
                    <option value="10" <?php if(date("m") == 10) echo "selected"; ?>>October</option>
                    <option value="11" <?php if(date("m") == 11) echo "selected"; ?>>November</option>
                    <option value="12" <?php if(date("m") == 12) echo "selected"; ?>>December</option>
                </select>
            </div>
            <button onclick="changeMonth(1)">Next</button>
        </div>

        <div id="calendar" class="calendar">
            <?php
                function generateCalendar($month, $year) {
                    $firstDayOfMonth = strtotime("$year-$month-01");
                    $daysInMonth = date("t", $firstDayOfMonth);
                    $firstWeekday = date("w", $firstDayOfMonth);
                    $calendar = "<div class='day'>Sun</div><div class='day'>Mon</div><div class='day'>Tue</div><div class='day'>Wed</div><div class='day'>Thu</div><div class='day'>Fri</div><div class='day'>Sat</div>";

                    $dayCounter = 1;
                    for ($i = 0; $i < 6; $i++) { 
                        for ($j = 0; $j < 7; $j++) {
                            if ($i == 0 && $j < $firstWeekday) {
                                $calendar .= "<div class='date inactive'></div>";
                            } else if ($dayCounter <= $daysInMonth) {
                                $calendar .= "<div class='date' onclick='selectDate($dayCounter)'>$dayCounter</div>";
                                $dayCounter++;
                            } else {
                                break;
                            }
                        }
                    }
                    return $calendar;
                }

                $currentMonth = date("m");
                $currentYear = date("Y");
                echo generateCalendar($currentMonth, $currentYear);
            ?>
        </div>
    </div>

    <script>
        function changeMonth(direction) {
            const yearSelect = document.getElementById("yearSelect");
            const monthSelect = document.getElementById("monthSelect");
            let currentYear = parseInt(yearSelect.value);
            let currentMonth = parseInt(monthSelect.value);

            currentMonth += direction;

            if (currentMonth > 12) {
                currentMonth = 1;
                currentYear++;
            } else if (currentMonth < 1) {
                currentMonth = 12;
                currentYear--;
            }

            yearSelect.value = currentYear;
            monthSelect.value = currentMonth;

            updateCalendar();
        }

        function updateCalendar() {
            const year = document.getElementById("yearSelect").value;
            const month = document.getElementById("monthSelect").value;
            const calendar = document.getElementById("calendar");

            const xhr = new XMLHttpRequest();
            xhr.open("GET", `?year=${year}&month=${month}`, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    calendar.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        function selectDate(day) {
            const dates = document.querySelectorAll('.date');
            dates.forEach(function(date) {
                date.classList.remove('selected');
            });

            const selectedDate = document.querySelector(`.date:nth-child(${day + 7})`);
            selectedDate.classList.add('selected');
            alert("Selected day: " + day);
        }
    </script>
</body>
</html>
