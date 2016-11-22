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
CREATE TABLE Classes
(
	ID		int		not null		auto_increment,
    Class		varchar(10),
    PRIMARY KEY (ID)
);
CREATE TABLE CourseNumber
(
		ID		int		NOT NULL		auto_increment,
		CourseNum	varchar(6),
	PRIMARY KEY (ID)
);
CREATE TABLE Department
(
		ID		int 	NOT NULL	auto_increment,
		Department		varchar(6),
	PRIMARY KEY (ID)
);
CREATE TABLE LOGIN
(
	ID					int 				NOT NULL		AUTO_INCREMENT,
	UserName			varchar(20)			NOT NULL,
    PWord				varchar(200)			NOT NULL,
    primary key (ID)
);
CREATE TABLE Professor
(
	ID		int		not null	auto_increment,
    FName			varchar(20),
    LName			varchar(20),
    Email			varchar(40),
    PRIMARY KEY (ID)
);
CREATE TABLE Semester
(
		ID		int		NOT NULL	auto_increment,
		Semester		varchar(10),
	PRIMARY KEY (ID)
);
CREATE TABLE SOandPI
(
	ID		int		NOT NULL	auto_increment,
    Outcome			char(1),
	Indicator		varchar(400),
    PRIMARY KEY (ID)
);
CREATE TABLE AssignedRubric
(
		ID		int		NOT NULL		auto_increment,
		StudentOutcome		char(1),
        DepartmentFK		int,
		CourseNumberFK		int,
        SemesterFK			int,
        Yr					char(4),
        NumOfStud			int,
        NumOfStudSatisfied	int,
        PerfIndi1			varchar(400),
        MethOfAsses1		varchar(10000),
		UseOfResult1		varchar(500),
		PerfIndi2			varchar(400),
        MethOfAsses2		varchar(10000),
		UseOfResult2		varchar(500),
		PerfIndi3			varchar(400),
        MethOfAsses3		varchar(10000),
		UseOfResult3		varchar(500),
		PerfIndi4			varchar(400),
        MethOfAsses4		varchar(10000),
		UseOfResult4		varchar(500),
		PerfIndi5			varchar(400),
        MethOfAsses5		varchar(10000),
		UseOfResult5		varchar(500),
		PerfIndi6			varchar(400),
        MethOfAsses6		varchar(10000),
		UseOfResult6		varchar(500),
	PRIMARY KEY (ID),
	FOREIGN KEY (DepartmentFK) REFERENCES Department(ID),
	FOREIGN KEY (CourseNumberFK) REFERENCES CourseNumber(ID),
	FOREIGN KEY (SemesterFK) REFERENCES Semester (ID)
);
CREATE TABLE Assign
(
    ProfFK			int,
    AssignedRubricFK		int,
    CourseNumFK			int,
	token		char(40),
    PRIMARY KEY (token),
    foreign key (ProfFK) references Professor(ID),
    foreign key (AssignedRubricFK) references AssignedRubric(ID),
    foreign key (CourseNumFK) references coursenumber(ID)
);
CREATE TABLE CoursesToSos
(
		ID		int			not null	auto_increment,
		Course		int,
		a			tinyint(1),
		b			tinyint(1),
		c			tinyint(1),
		d			tinyint(1),
		e			tinyint(1),
		f			tinyint(1),
		g			tinyint(1),
		h			tinyint(1),
		i			tinyint(1),
		j			tinyint(1),
		k			tinyint(1),
		l			tinyint(1),
		m			tinyint(1),
		n			tinyint(1),
	PRIMARY KEY (ID)
);