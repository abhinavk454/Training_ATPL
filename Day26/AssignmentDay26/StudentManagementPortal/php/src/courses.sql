CREATE TABLE `courses` (
  `c_name` varchar(20) NOT NULL,
  `fee` int NOT NULL,
  `duration` int NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
-- Dumping data for table `courses`
--
INSERT INTO `courses` (`c_name`, `fee`, `duration`)
VALUES ('Java', 30000, 6),
  ('NodeJS', 40000, 8),
  ('Python', 20000, 4);
--
-- Indexes for dumped tables
--
--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
ADD PRIMARY KEY (`c_name`);
COMMIT;