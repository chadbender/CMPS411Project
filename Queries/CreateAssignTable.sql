CREATE TABLE Assign
(
    ProfFK			int,
    AssignedRubricFK		int,
    CourseNumFK			int,
	token		char(40),
    PRIMARY KEY (token),
    foreign key (ProfFK) references Professor(ID),
    foreign key (AssignedRubricFK) references AssignedRubric(ID),
    foreign key (CourseNumFKFK) references coursenumber(ID)
);