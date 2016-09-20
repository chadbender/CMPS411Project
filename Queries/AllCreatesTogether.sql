CREATE DATABASE AccreditDB;
USE AccreditDB;
CREATE TABLE baseRubric
(
		ID		int		NOT NULL		auto_increment,
		StudentOutcome		char(1),
        PerfIndi1			varchar(400),
		PerfIndi2			varchar(400),
		PerfIndi3			varchar(400),
		PerfIndi4			varchar(400),
		PerfIndi5			varchar(400),
		PerfIndi6			varchar(400),
	PRIMARY KEY (ID)
);