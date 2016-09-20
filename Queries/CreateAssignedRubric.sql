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