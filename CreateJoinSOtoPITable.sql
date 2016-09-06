CREATE TABLE JoinSOtoPI
(
	ID		int		not null		auto_increment,
    StudentOutcomeFK			int,
    PerformanceIndicatorFK		int,
    PRIMARY KEY (ID),
    foreign key (StudentOutcomeFK) references studentoutcomes(ID),
    foreign key (PerformanceIndicatorFK) references performanceindicator(ID)
)