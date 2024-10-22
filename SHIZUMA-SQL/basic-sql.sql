INSERT INTO employees (firs_name,last_name,salary,department)
               VALUES ('John','Davis',20500,'Audit');

-- Select all employees and all employee details
SELECT * FROM employees;

-- Select all first and last name of all employees
SELECT first_name,last_name FORM employees;

-- Select all employee detail of all IT employees
SELECT * FROM employees
 WHERE department = 'IT';

 -- Select ID of all employees in AUDIT department
 SELECT id FROM employees
 WHERE department = 'audit';

SELECT id,firs_name,last_name FROM employees
 WHERE department = 'audit';

 -- 