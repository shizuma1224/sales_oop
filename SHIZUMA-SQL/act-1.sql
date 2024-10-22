--6--
-- a
SELECT * FROM employees

-- b
SELECT * FROM employees
 WHERE id = 2

-- c
SELECT * FROM employees
 WHERE emp_gender = 'M'

-- d
SELECT * FROM employees
 WHERE emp_country = 'USA'

-- e
SELECT stud_first_name,stud_last_name,stud_course FROM students

-- f
SELECT stud_last_name,stud_country FROM students
 WHERE id = 3

-- g
SELECT stud_first_name,stud_last_name,stud_course,stud_year_level FROM students
 WHERE id = 1

--7--
-- a
UPDATE employees
SET emp_birthdate='1990-03-26'
 WHERE id = 1

-- b
UPDATE employees
SET emp_last_name='Johnson'
 WHERE id = 2

-- c
UPDATE students
SET stud_course = 'BSA',
    stud_year_level = 2
 WHERE stud_first_name = 'Alec'
   AND stud_last_name = 'Bell'

--8--
-- a
DELETE FROM employees
 WHERE id = 3

-- b 
DELETE FROM students
 WHERE id IN (1,2)

