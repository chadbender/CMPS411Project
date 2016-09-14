CREATE TABLE RubricTable
(
		ID		int		NOT NULL		auto_increment,
        DepartmentFK		int,
		CourseNumberFK		int,
        SemesterFK			int,
        Yr					char(4),
        NumOfStud			int,
        NumOfStudSatisfied	int,
        PerfIndi1FK			int,
        MethOfAsses1		varchar(10000),
);