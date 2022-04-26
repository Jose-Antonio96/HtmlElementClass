$date=$(Get-Date).ToString("yyyyMMddhhmmss")
$OutputFileName=$date+"_ReportSuite.html"
./vendor/bin/phpunit ./tests/filteringTest.php --testdox-html ./logs/tests/$OutputFileName --coverage-html ./logs/coverage