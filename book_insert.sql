use books;

insert into customers values
	(3, 'Julie Smith', '25 Oak Street', 'Airport West'),
	(4, 'Alan Hong', 'what is it', 'Maina St'),
	(5, 'haha', 'Ruoyu Road', 'Yaalll');

insert into orders values
    (NULL, 3, 69.34, '2007-04-02'),	
    (NULL, 1, 49.34, '2007-04-15'),
    (NULL, 2, 74.34, '2007-04-19'),
    (NULL, 3, 24.34, '2007-05-01');

insert into books values
    ('0-672-31953-8', 'Michael Morgan', 'Java 2 for fresh', 34.99),
    ('0-672-31954-8', 'Tomas H', 'C++', 67.99),
    ('0-672-31955-8', 'Riche K', 'Python it', 54.99),
    ('0-672-31956-8', 'Miths Morgan', 'Here is miracal', 64.99);

insert into order_items values
	(1,'0-672-31953-8',2),
	(2,'0-672-31954-8',1),
	(3,'0-672-31954-8',1),
	(3,'0-672-31955-8',1),
	(4,'0-672-31956-8',3);

insert into book_reviews values
    ('0-672-31953-8', 'The Morgan book is clearly wriiten and goes well beyond most of the basic Java books out there.');	