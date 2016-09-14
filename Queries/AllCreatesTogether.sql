CREATE DATABASE test;
USE test;
CREATE TABLE Classes
(
	ID		int		not null		auto_increment,
    Class		varchar(10),
    PRIMARY KEY (ID)
);

CREATE TABLE LOGIN
(
	ID					int 				NOT NULL		AUTO_INCREMENT,
	UserName			varchar(20)			NOT NULL,
    PWord				varchar(20)			NOT NULL,
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

CREATE TABLE SOandPI
(
	ID		int		NOT NULL	auto_increment,
    Outcome			char(1),
	Indicator		varchar(400),
    PRIMARY KEY (ID)
);

CREATE TABLE baseRubric
(
	ID		int 	NOT NULL	auto_increment,
	PRIMARY KEY (ID)
);

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

INSERT INTO `login`
	(`UserName`, `PWord`)
	VALUES 
	('Nick','password1'), 
	('chad','password1'), 
	('neil','password1'), 
	('miguel','password1'), 
	('michelle','password1');
	
INSERT INTO Professor
	(FName,LName,Email)
    VALUES
    ('Lu','Yuan','Lu.Yuan@selu.edu'),
    ('John','Burris','John.Burris-3@selu.edu'),
    ('Ghassan','Alkadi','galkadi@selu.edu'),
    ('Ihssan','Alkadi','ialkadi@selu.edu'),
    ('Mike','Asoodeh','asoodeh@selu.edu'),
    ('Anthony','Blakeney','ablakeney@selu.edu'),
    ('Roy','Bonnette','rbonnette@selu.edu'),
    ('Amanda','Brown','Amanda.Brown-6@selu.edu'),
    ('Wesley','Deneke','wdeneke@selu.edu'),	
    ('George','Drouant','gdrouant@selu.edu'),
    ('Cris','Koutsougeras','ck@selu.edu'),
    ('Chris','Kuiper','August.Kuiper@selu.edu'),
    ('Ho-Hoon','Lee','hhlee@selu.edu'),
    ('Jing','Liu','Jing.Liu@selu.edu'),
    ('Ephraim','Massawe','Ephraim.Massawe@selu.edu'),
    ('Patrick','McDowell','Patrick.McDowell@selu.edu'),
    ('Rana','Mitra','Rana.Mitra@selu.edu'),
    ('Jared','Reno','Jared.Reno@selu.edu'),
    ('Ed','Rode','erode@selu.edu'),
    ('Steele','Russell','srussell@selu.edu'),
    ('Mohammad','Saadeh','msaadeh@selu.edu'),
    ('Allanagh','Sewell','asewell@selu.edu'),
    ('James','Stutts','jsstutts@selu.edu'),
    ('Kuo-Pao','Yang','kyang@selu.edu'),
    ('Mohamed','Zeidan','Mohamed.Zeidan@selu.edu');
	
INSERT INTO SOandPI
	(Outcome, Indicator)
    VALUES
    ('a','Students understand the foundations of math, logic, and statistics.'),
    ('a','Students can apply this knowledge to algorithm development.'),
    ('a','Students can apply this knowledge to data analysis.'),
    ('b','Students are able to formulate and decompose a problem into appropriate components.'),
    ('b','Students are able to soljoinsotopiicit and formulate software and hardware requirements specifications.'),
    ('b','Students are able to estimate resources required for the proposed solution.'),
    ('c','Ability to Conceptualize.'),
    ('c','Ability to Develop.'),
    ('c','Ability to Validate.'),
    ('d','Organization and Responsibilities.'),
    ('d','Interaction'),
    ('d','Productivity'),
    ('e','Students will demonstrate understanding of intellectual property issues.'),
    ('e','Students will demonstrate working knowledge of a code of ethics.'),
    ('e','Students value fairness in making judgments involving discrimination between people and groups.'),
    ('e','Students appreciate the need for proper etiquette and proactive social behavior in professional situations.'),
    ('f','Preparing Documents and Presentation Materials.'),
    ('f','Presentation Delivery.'),
    ('g','Students will demonstrate understanding of various ways in which computing technology impacts individuals, organizations, and society.'),
    ('g','Students will demonstrate ability to analyze and reason about the impact of advances in computer technology.'),
    ('g','Students will demonstrate an understanding of the responsibilities of a computing technology professional with respect to individuals and society.'),
    ('h','Students will demonstrate recognition of the need for continuing professional development.'),
    ('h','Students will demonstrate familiarity with means for continuing professional development.'),
    ('h','Students will demonstrate ability to independently identify and assimilate new information.'),
    ('h','Students will demonstrate an ability to criticize and evaluate the quality of new information.'),
    ('i','Ability to do task-specific research to learn new techniques, skills, and tools.'),
    ('i','Students will demonstrate competence with multiple current platforms for computing and development.'),
    ('i','Students will demonstrate competence with a selected set of tools (defined in cooperation with advisory board.'),
    ('j','Ability to identify and evaluate relevance of new technicl concepts and practices in the core information technologies.'),
    ('j','Students will understand and be able to apply current technical concepts and practices in the core information technologies.'),
    ('k','Students will demonstrate competence in the process of understanding and formally specifying user requirements.'),
    ('k','Students will demonstrate use of tools for modeling user needs.'),
    ('k','Students will demonstrate ability to develop software from user requirements.'),
    ('l','Students will demonstrate knowledge of current IT solutions.'),
    ('l','Students will demonstrate ability to collect user requirements and recognize failures in existing IT solutions.'),
    ('l','Students can apply knowledge of current technologies to integrate solutions.'),
    ('m','Demonstrate knowledge of current standards and their application.');