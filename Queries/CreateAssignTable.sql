CREATE TABLE Assign
(
	ID		int		NOT NULL		auto_increment,
    ProfFK			int,
    OutcomeFK		int,
    ClassFK			int,
    PRIMARY KEY (ID),
    foreign key (ProfFK) references Professor(ID),
    foreign key (OutcomeFK) references baseRubric(ID),
    foreign key (ClassFK) references classes(ID)
);