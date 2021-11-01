# match-schedule
Company ACME offers their employees the flexibility to work the hours they want. But due to some external circumstances they need to know what employees have been at the office within the same time frame.

This program output a table containing pairs of employees and how often they have coincided in the office.

Input: File schedule.txt contains employee's names and the schedule they worked, indicating the time and hours. For this example we have ten sets of data as the following format:

NAME1=MO10:00-12:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00-21:00
NAME2=MO10:00-12:00,TH12:00-14:00,SU20:00-21:00
NAME3...
NAME4...

Format of screen output is:

NAME1-NAME2: NUMBER (number of employees within the same frame).  

For the development, the simplest way was through a class called Schedule. A function in Schedule class receive as a parameter the data obtained from the file. Before instantiating the class, was used a php function that separates text data with equal character (=) for separating the employee's name from time in the office. To know which employees coincided in the office (in the class), was used a function for finding intersection of 2 arrays. Finally, results are display on the screen.

For install and execute you need the following the next steps:

1. Sure you have installed PHP language from 5.6 to 8 version or Wamp o Xampp Server. 
2. Put schedule.txt and Schedule.php files in www of htdocs directory.
3. Execute it at php console php Schedule.php or in your browser in http://localhost/Schedule.php and it is ready.
4. Thats all
/////////////////////////////
