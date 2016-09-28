CREATE TABLE Assign
(
    ProfFK			int,
    AssignedRubricFK		int,
    CourseNumFK			int,
	token		char(40) NOT NULL,
	TimeStamp1		TIMESTAMP,
    PRIMARY KEY (token),
    foreign key (ProfFK) references Professor(ID),
    foreign key (AssignedRubricFK) references AssignedRubric(ID),
    foreign key (CourseNumFK) references CourseNumber(ID)
);