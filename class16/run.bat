@echo off
set /p srn= "Please enter your srn:" 
set /p cgpa= "Please enter your cgpa:"
SET datas="srn=%srn%&cgpa=%cgpa%"
curl "http://localhost/WebTech2/class16/client.php?%datas%"
curl "http://localhost/WebTech2/class16/client.php?srn=99&cgpa=10";
pause