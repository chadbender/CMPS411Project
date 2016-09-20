CREATE TABLE Assign
(
	ID		int		NOT NULL		auto_increment,
    ProfFK			int,
    AssignedRubricFK		int,
    ClassFK			int,
    PRIMARY KEY (ID),
    foreign key (ProfFK) references Professor(ID),
    foreign key (AssignedRubricFK) references AssignedRubric(ID),
    foreign key (ClassFK) references classes(ID)
);