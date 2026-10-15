USE TechnologyPortal;
INSERT INTO Technology
(Name, Email, Contact, TechnologyName, Category, Type, YearIntroduced, Description)

VALUES
('Rahul Sharma', 'rahul@gmail.com', '9876543210',
'Artificial Intelligence', 'Artificial Intelligence',
'Software', 1956,
'Technology that enables machines to simulate human intelligence.'),

('Priya Patel', 'priya@gmail.com', '9123456780',
'Blockchain', 'Blockchain',
'Platform', 2008,
'Distributed ledger technology used for secure and transparent transactions.'),

('Amit Verma', 'amit@gmail.com', '9988776655',
'Internet of Things', 'Internet of Things','Hardware', 1999,
'Network of physical devices connected to the Internet for data exchange.');

Verify the Inserted Records
Execute the following SQL query:
SELECT * FROM Technology;
Expected Output