
# SUMMER-INTERNSHIP-ONGC

### PROJECT to -:

1. Sign in to our CSV file Management Website/Server
2. upload a excel file into database via browser (website)
3. Allow user to  edit User Remarks
4. Search for a file as a admin
5. Allow Admin to edit Admin Remarks and status
6. Reflect the changes in database
7. update csv file in local storage

#### HOW TO GO THROUGH THE PROJECT :

1. ###### Create a account using 'signup.php' page
2. ###### log in using your account using 'login.php' page
3. ###### Log in using Account type: USER
  1. Opened the 'UPLOAD_PAGE.php' page which is conneted to 'UPLOAD_PAGE_STYLES.css' & 'UPLOAD_APP.js' file
  2. This file is a webpage with upload option
  3. 'UPLOAD_DBCONNECT.php' runs and uploads the file in database table 'upload'
  4. 'UPLOAD_DBCONNECT.html' is hyperlinked to 'USER_DISPLAY.php'
  5. This webpage displays the table uploaded having option od edit and save
  6. save option posts to 'UPDATE_CSV_FILE_USER.php'
  7. edit form posts to 'UPDATE_USER_REMARK.php'

4. ###### Log in using Account type: ADMIN
  1. Opened the 'SEARCH_PAGE.php' page which is conneted to 'SEARCH_PAGE_STYLES.css' file
  2. This file is a webpage with SEARCH option
  3. 'SEARCH_N_UPLOAD.php' search the file and uploads the file in database table 'search'
  4. 'SEARCH_N_UPLOAD.php' is hyperlinked to 'ADMIN_DISPLAY.php'
  5. This webpage displays the table uploaded having option od edit and save
  6. save option posts to 'UPDATE_CSV_FILE_ADMIN.php'
  7. edit form posts to 'UPDATE_STATUS_ADMIN_REMARK.php'

5. ###### ALL html ans php file have their own css file with similar name followed by _STYLES
6. ###### Images folder contain images used in project
7. ###### UPLOADS folder contain a sample csv file: 'july1.csv'
8. ###### 'connection.php' file is basic file to connect to mysql server (for authentication pages)
9. ###### 'functions.php' contain basic functions of generating user_id and checking it
