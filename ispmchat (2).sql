-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2020 às 14:34
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ispmchat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicacao_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `file`, `publicacao_id`, `created_at`, `updated_at`, `descricao`) VALUES
(1, '064212202007105f080dc4841c7.pdf', 3, '2020-07-10 05:42:12', '2020-07-10 05:42:12', 'C:\\xampp\\tmp\\php29B8.tmp'),
(5, '091749202007105f08323d0ada3.png', 7, '2020-07-10 08:17:49', '2020-07-10 08:17:49', 'C:\\xampp\\tmp\\phpC663.tmp'),
(6, '091749202007105f08323d3367b.png', 7, '2020-07-10 08:17:49', '2020-07-10 08:17:49', 'C:\\xampp\\tmp\\phpC664.tmp'),
(7, '091749202007105f08323d64d0d.png', 7, '2020-07-10 08:17:49', '2020-07-10 08:17:49', 'C:\\xampp\\tmp\\phpC665.tmp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conteudo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicacao_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `conteudo`, `publicacao_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'I have any questions from page 4 to 8 where speaks about relationship', 3, 24, '2020-07-10 05:50:06', '2020-07-10 05:50:06'),
(2, 'Sim Aula recebida com sucesso...', 4, 28, '2020-07-10 08:29:42', '2020-07-10 08:29:42'),
(3, 'Estão prontos para o inicio das aulas', 4, 31, '2020-07-10 08:30:24', '2020-07-10 08:30:24'),
(4, 'I have any quetions from page 4 to 7', 7, 24, '2020-07-10 08:31:56', '2020-07-10 08:31:56'),
(5, 'I have any quetions from page 6 to 7', 7, 27, '2020-07-10 08:32:35', '2020-07-10 08:32:35'),
(6, 'Simao tudo bem....', 4, 28, '2020-07-10 08:35:12', '2020-07-10 08:35:12'),
(7, 'fdasfsdgsdgsdg', 4, 31, '2020-07-10 08:36:13', '2020-07-10 08:36:13'),
(8, 'kegeghfgsdgafg', 7, 31, '2020-07-10 10:33:14', '2020-07-10 10:33:14'),
(9, 'Sim professor....', 7, 24, '2020-07-10 10:33:42', '2020-07-10 10:33:42'),
(10, 'fgsdhkbfhksdbhgjk', 7, 24, '2020-07-10 10:38:59', '2020-07-10 10:38:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `ano`, `departamento_id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Engenharia Informática', '5', 1, NULL, '2020-07-10 04:48:54', '2020-07-10 04:48:54'),
(2, 'Mecânica', '5', 1, NULL, '2020-07-10 07:52:16', '2020-07-10 07:52:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso_discs`
--

CREATE TABLE `curso_discs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disciplina_id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Sem descrição',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `curso_discs`
--

INSERT INTO `curso_discs` (`id`, `disciplina_id`, `curso_id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'sem descrição', '2020-07-10 04:53:15', '2020-07-10 04:53:35'),
(2, 5, 1, 'sem descrição', '2020-07-10 04:53:57', '2020-07-10 04:53:57'),
(3, 3, 1, 'sem descrição', '2020-07-10 04:54:21', '2020-07-10 04:54:21'),
(4, 1, 1, 'sem descrição', '2020-07-10 04:54:37', '2020-07-10 04:54:37'),
(5, 1, 2, 'fkfkggkgkkj', '2020-07-10 07:59:26', '2020-07-10 07:59:26'),
(6, 4, 2, 'kkkkk', '2020-07-10 07:59:42', '2020-07-10 07:59:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Dct', '2020-07-10 04:32:14', '2020-07-10 04:32:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Sem descrição',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome`, `caract`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'programação', 'anual', 'anual', '2020-07-10 04:37:31', '2020-07-10 04:37:31'),
(2, 'BD', 'anual', 'anual', '2020-07-10 04:37:49', '2020-07-10 04:37:49'),
(3, 'Informática', 'anual', 'semestral', '2020-07-10 04:38:21', '2020-07-10 04:38:21'),
(4, 'fisica', 'anual', NULL, '2020-07-10 04:39:08', '2020-07-10 04:39:08'),
(5, 'eletronica', 'semestral', NULL, '2020-07-10 04:39:31', '2020-07-10 04:39:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudantes`
--

CREATE TABLE `estudantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `turma_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `anoacad` int(11) DEFAULT '1',
  `bi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '7263792BA044',
  `telefone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '914205142'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `numero`, `fullname`, `turno`, `data_nasc`, `genero`, `user_id`, `curso_id`, `turma_id`, `created_at`, `updated_at`, `anoacad`, `bi`, `telefone`) VALUES
(1, 141090001, 'Domingos António Fernando', 'Manhã', '1996-03-23', 'masculino', 24, 1, 1, '2020-07-10 04:57:57', '2020-07-10 04:57:57', 3, '7263792BA044', '914205142'),
(2, 34598659, 'Simão Pinda', 'Tarde', '2020-07-08', '1', 26, 2, 4, '2020-07-10 07:56:00', '2020-07-10 08:21:31', 4, '7263792BA044', '914205142'),
(3, 151090001, 'Eduardo Cavungo', 'Manhã', '2006-07-13', 'masculino', 27, 1, 1, '2020-07-10 07:56:54', '2020-07-10 07:56:54', 3, '7263792BA044', '914205142'),
(4, 9987866, 'Sebastião Pinto', 'Tarde', '2020-07-30', '1', 28, 2, 4, '2020-07-10 07:57:20', '2020-07-10 08:20:31', 4, '7263792BA044', '914205142'),
(5, 995833, 'Julio Bento Miguel', 'Noite', '2020-07-29', 'feminino', 29, 2, 2, '2020-07-10 07:58:38', '2020-07-10 07:58:38', 2, '7263792BA044', '914205142');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagems`
--

CREATE TABLE `mensagems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origem` bigint(20) UNSIGNED NOT NULL,
  `destino` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `mensagems`
--

INSERT INTO `mensagems` (`id`, `mensagem`, `file`, `origem`, `destino`, `created_at`, `updated_at`, `bi`, `telefone`) VALUES
(1, 'Hello teacher. by the way,', NULL, 24, 23, '2020-07-10 05:10:58', '2020-07-10 05:10:58', NULL, NULL),
(2, 'I HAVE SOME QUESTION ABOUT THE HOMEWORK, CAN I ASK?', NULL, 24, 23, '2020-07-10 05:11:59', '2020-07-10 05:11:59', NULL, NULL),
(3, 'YES', NULL, 23, 24, '2020-07-10 05:12:48', '2020-07-10 05:12:48', NULL, NULL),
(4, 'HOW CAN I HELP YOU?', NULL, 23, 24, '2020-07-10 05:13:41', '2020-07-10 05:13:41', NULL, NULL),
(5, 'Hello teacher.', NULL, 27, 23, '2020-07-10 08:34:45', '2020-07-10 08:34:45', NULL, NULL),
(6, 'qual mensagem', NULL, 24, 31, '2020-07-10 08:35:39', '2020-07-10 08:35:39', NULL, NULL),
(7, 'Hello teacher.', NULL, 27, 31, '2020-07-10 08:37:28', '2020-07-10 08:37:28', NULL, NULL),
(8, 'Eu não sou professor de ingles', NULL, 31, 27, '2020-07-10 08:37:57', '2020-07-10 08:37:57', NULL, NULL),
(9, 'Olá Professores....', NULL, 28, 31, '2020-07-10 08:56:34', '2020-07-10 08:56:34', NULL, NULL),
(10, 'sdghfsjhdgf', NULL, 31, 24, '2020-07-10 10:35:15', '2020-07-10 10:35:15', NULL, NULL),
(11, 'certo prof....', NULL, 24, 31, '2020-07-10 10:35:21', '2020-07-10 10:35:21', NULL, NULL),
(12, 'gdgsdgs', NULL, 24, 31, '2020-07-10 10:39:46', '2020-07-10 10:39:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2013_06_25_110536_create_departamentos_table', 1),
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2020_06_25_110611_create_cursos_table', 1),
(36, '2020_06_25_110839_create_disciplinas_table', 1),
(38, '2020_06_25_111016_create_professors_table', 1),
(39, '2020_06_25_111109_create_estudantes_table', 1),
(40, '2020_06_25_111157_create_curso_discs_table', 1),
(41, '2020_06_25_111226_create_prof_discs_table', 1),
(43, '2020_06_25_111355_create_publicacaos_table', 1),
(44, '2020_06_25_111426_create_arquivos_table', 1),
(45, '2020_06_25_111504_create_comentarios_table', 1),
(46, '2020_06_25_111530_create_mensagems_table', 1),
(47, '2020_06_29_115023_create_prof_departs_table', 2),
(48, '2020_06_25_110914_create_turmas_table', 3),
(49, '2020_06_25_111312_create_turma_prof_discs_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professors`
--

CREATE TABLE `professors` (
  `nif` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_acad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professors`
--

INSERT INTO `professors` (`nif`, `fullname`, `grau_acad`, `email`, `formacao`, `telefone`, `user_id`, `created_at`, `updated_at`) VALUES
(2348, 'Simão Sergio', 'Mestre', 'simao@gmail.com', 'Física', '923214354', 33, '2020-07-10 10:01:09', '2020-07-10 10:01:09'),
(123409, 'Edgar Mateus', 'Licenciado', 'edgar2@gmail.com', 'Engenharia Informatica', '+244932598378', 31, '2020-07-10 08:01:36', '2020-07-10 10:03:17'),
(12734447, 'Euclides Nunguno', 'licenciado', 'euclides@gmail.com', 'Electrotecnia', '992134565', 32, '2020-07-10 10:00:14', '2020-07-10 10:00:14'),
(234343546787, 'Mateus Tiago', 'Licenciado', 'mateus@ispm.co.ao', 'Ciência da Computação', '91234345', 23, '2020-07-10 04:45:54', '2020-07-10 04:45:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof_departs`
--

CREATE TABLE `prof_departs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prof` bigint(20) UNSIGNED NOT NULL,
  `id_dep` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `prof_departs`
--

INSERT INTO `prof_departs` (`id`, `id_prof`, `id_dep`, `created_at`, `updated_at`) VALUES
(1, 234343546787, 1, '2020-07-10 04:59:19', '2020-07-10 04:59:19'),
(2, 123409, 1, '2020-07-10 08:02:13', '2020-07-10 08:02:13'),
(3, 2348, 1, '2020-07-10 10:27:11', '2020-07-10 10:27:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof_discs`
--

CREATE TABLE `prof_discs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disciplina_id` bigint(20) UNSIGNED NOT NULL,
  `professor_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `prof_discs`
--

INSERT INTO `prof_discs` (`id`, `disciplina_id`, `professor_id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 1, 234343546787, NULL, '2020-07-10 05:00:16', '2020-07-10 05:00:16'),
(2, 3, 234343546787, NULL, '2020-07-10 08:02:38', '2020-07-10 08:02:38'),
(3, 1, 123409, NULL, '2020-07-10 08:02:53', '2020-07-10 08:02:53'),
(4, 2, 123409, NULL, '2020-07-10 08:03:01', '2020-07-10 08:03:01'),
(5, 5, 234343546787, NULL, '2020-07-10 10:28:02', '2020-07-10 10:28:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacaos`
--

CREATE TABLE `publicacaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `turma_prof_disc_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `publicacaos`
--

INSERT INTO `publicacaos` (`id`, `titulo`, `conteudo`, `turma_prof_disc_id`, `created_at`, `updated_at`) VALUES
(3, 'UM MODELO DE DADOS PARA INSTITUIÇÕES DE ENSINO', 'Este estudo pretende desenvolver uma modelagem de dados com a finalidade de ser\r\nutilizada na Região do Alto Vale do Itajaí no Estado de Santa Catarina pelas Instituições de\r\nEnsino privadas ou públicas de todos os níveis de ensino. Outro propósito visa construir um\r\nbanco de dados distribuído permitindo que as informações de alunos e professores estejam\r\ndisponíveis para consultas on-line em qualquer município da região. Inicialmente, define-se\r\nos conceitos de modelagem de dados e banco de dados, analisando a forma de distribuição\r\ndestes dados. Em seguida, elabora-se a modelagem resultando Diagrama de Fluxo de\r\nDados, Diagrama de Entidade-Relacionamento e Dicionário de Dados. Posteriormente, com\r\nbase neste padrão, há a definição de uma estrutura de rede para distribuição dos dados\r\nutilizando-se a Rede de Ciência e Tecnologia (RCT-SC), o Conselho Regional de Educação\r\n(CRE) e as Secretarias Municipais de Ensino. Esta estrutura facilita a implantação do\r\nprojeto, através da padronização e dinamização dos processos.', 1, '2020-07-10 05:42:12', '2020-07-10 05:42:12'),
(4, 'Inicio da Aula', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other.\r\nFor example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme.', 3, '2020-07-10 08:14:57', '2020-07-10 08:14:57'),
(7, 'Inicio da Aula', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other.\r\nFor example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme.', 2, '2020-07-10 08:17:48', '2020-07-10 08:17:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `ano` int(11) NOT NULL,
  `periodo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Sem descrição',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `curso_id`, `ano`, `periodo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Turma 8', 1, 3, 'Manhã', NULL, '2020-07-10 04:51:32', '2020-07-10 04:51:32'),
(2, 'B', 2, 1, 'Tarde', 'primeiro ano', '2020-07-10 07:53:11', '2020-07-10 07:53:11'),
(3, 'Turma 15', 1, 2, 'Noite', NULL, '2020-07-10 07:53:18', '2020-07-10 07:53:18'),
(4, 'C', 2, 4, 'Manhã', 'segundo ano', '2020-07-10 07:53:48', '2020-07-10 07:53:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma_prof_discs`
--

CREATE TABLE `turma_prof_discs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `turma_id` bigint(20) UNSIGNED NOT NULL,
  `pd_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `turma_prof_discs`
--

INSERT INTO `turma_prof_discs` (`id`, `turma_id`, `pd_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-07-10 05:00:16', '2020-07-10 05:00:16'),
(2, 1, 3, '2020-07-10 08:02:53', '2020-07-10 08:02:53'),
(3, 4, 4, '2020-07-10 08:03:01', '2020-07-10 08:03:01'),
(4, 2, 5, '2020-07-10 10:28:02', '2020-07-10 10:28:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dep` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `categoria`, `id_dep`, `remember_token`, `created_at`, `updated_at`, `file`) VALUES
(6, 'Higino', 'admin@gmail.com', NULL, '$2y$10$QU/1LcLbCcG61DrD8YGyuO22uixiBZ9vnKkVPBpK9jcqB0IvOwNy6', 'Admin', NULL, NULL, '2020-06-29 09:53:41', '2020-06-29 09:53:41', 'avatar.png'),
(20, 'Domingos Fernando', 'domingos@gmail.com', NULL, '$2y$10$loRgob7q8GVqOP9JarJJ7.s0lP44pZSEo0m3g2ArwDubb9u7LHyLe', 'Gestor', NULL, NULL, '2020-07-10 04:31:57', '2020-07-10 04:31:57', 'avatar.png'),
(21, 'Edgar Mateus', 'edgar@gmail.com', NULL, '$2y$10$loRgob7q8GVqOP9JarJJ7.s0lP44pZSEo0m3g2ArwDubb9u7LHyLe', 'Chefe de Departamento', 1, NULL, '2020-07-10 04:33:43', '2020-07-10 04:33:43', 'avatar.png'),
(23, 'Mateus Tiago', 'mateus@ispm.co.ao', NULL, '$2y$10$loRgob7q8GVqOP9JarJJ7.s0lP44pZSEo0m3g2ArwDubb9u7LHyLe', 'Professor', NULL, NULL, '2020-07-10 04:45:54', '2020-07-10 04:45:54', 'avatar.png'),
(24, 'Domingos António Fernando', 'domingosf@gmail.com', NULL, '$2y$10$XnPu2uY8OhrZm7uxM7QWMuOMg1lIYEKtQqV7zEll.iyT/d60.XmyK', 'Estudante', NULL, NULL, '2020-07-10 04:57:57', '2020-07-10 04:57:57', 'avatar.png'),
(25, 'Rene Zinga', 'zinga@gmail.com', NULL, '$2y$10$G4NRL0mcMRF.rHkxVx2vSORzJVHXL6vevVS3kQnH4KKATUQK4cGoy', 'Coordenador', 1, NULL, '2020-07-10 07:50:01', '2020-07-10 07:50:01', 'avatar.png'),
(26, 'Simão Pinda', 'higinooo@ispm.co.ao', NULL, '$2y$10$8cEPlfzWUMo38dD4UlotC.Pfau8o43s7Kxl5kemiymaTpg5BqUbUy', 'Estudante', NULL, NULL, '2020-07-10 07:55:59', '2020-07-10 07:55:59', 'avatar.png'),
(27, 'Eduardo Cavungo', 'eduardo@gmail.com', NULL, '$2y$10$YPYj1MLXjzbSI21SbW0APu5R.UScskVlmYuifkrz59bfCcKdNv.se', 'Estudante', NULL, NULL, '2020-07-10 07:56:54', '2020-07-10 07:56:54', 'avatar.png'),
(28, 'Sebastião Pinto', 'sebastiao@gmail.com', NULL, '$2y$10$gvNfCzB8AZQYrPFoGC641.oF0yduieHOhD2t8sdYEF7zmD9eTJfk2', 'Estudante', NULL, NULL, '2020-07-10 07:57:20', '2020-07-10 09:57:45', '105745202007105f0849a9cedc6.jpeg'),
(29, 'Julio Bento Miguel', 'selestinno@gmail.com', NULL, '$2y$10$3s/B.OpQI4xQ2703F7hX9.65/iEPJ4YXK1u.na9isw1POPNmYZQwq', 'Estudante', NULL, NULL, '2020-07-10 07:58:37', '2020-07-10 07:58:37', 'avatar.png'),
(31, 'Edigar Domingos', 'edgar2@gmail.com', NULL, '$2y$10$G3NploKTQizGl/ANcQWFPOaQ.LVg6CsdW1WVLHovlVUB7sunP6rbu', 'Professor', NULL, NULL, '2020-07-10 08:01:36', '2020-07-10 08:01:36', 'avatar.png'),
(32, 'Euclides Nunguno', 'euclides@gmail.com', NULL, '$2y$10$73Oulq/bL5ldRqa7SaffSelL4/8I5oVili7EzvXCKI44WDgUQJfFa', 'Professor', NULL, NULL, '2020-07-10 10:00:14', '2020-07-10 10:00:14', 'avatar.png'),
(33, 'Simão Sergio', 'simao@gmail.com', NULL, '$2y$10$v7NGSdlXpcKIM.nj/OueYOnN4EeVHx4xbivkgWx8cXN6J1C34at7e', 'Professor', NULL, NULL, '2020-07-10 10:01:09', '2020-07-10 10:01:09', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arquivos_publicacao_id_foreign` (`publicacao_id`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_publicacao_id_foreign` (`publicacao_id`),
  ADD KEY `comentarios_user_id_foreign` (`user_id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursos_departamento_id_foreign` (`departamento_id`);

--
-- Indexes for table `curso_discs`
--
ALTER TABLE `curso_discs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_discs_disciplina_id_foreign` (`disciplina_id`),
  ADD KEY `curso_discs_curso_id_foreign` (`curso_id`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estudantes`
--
ALTER TABLE `estudantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudantes_user_id_foreign` (`user_id`),
  ADD KEY `estudantes_curso_id_foreign` (`curso_id`),
  ADD KEY `estudantes_turma_id_foreign` (`turma_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagems`
--
ALTER TABLE `mensagems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensagems_destino_foreign` (`destino`),
  ADD KEY `mensagems_origem_foreign` (`origem`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`nif`),
  ADD UNIQUE KEY `professors_email_unique` (`email`),
  ADD KEY `professors_user_id_foreign` (`user_id`);

--
-- Indexes for table `prof_departs`
--
ALTER TABLE `prof_departs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prof_departs_id_prof_foreign` (`id_prof`),
  ADD KEY `prof_departs_id_dep_foreign` (`id_dep`);

--
-- Indexes for table `prof_discs`
--
ALTER TABLE `prof_discs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prof_discs_disciplina_id_foreign` (`disciplina_id`),
  ADD KEY `prof_discs_professor_id_foreign` (`professor_id`);

--
-- Indexes for table `publicacaos`
--
ALTER TABLE `publicacaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publicacaos_turma_prof_disc_id_foreign` (`turma_prof_disc_id`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turmas_curso_id_foreign` (`curso_id`);

--
-- Indexes for table `turma_prof_discs`
--
ALTER TABLE `turma_prof_discs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_prof_discs_turma_id_foreign` (`turma_id`),
  ADD KEY `turma_prof_discs_pd_id_foreign` (`pd_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_dep_foreign` (`id_dep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `curso_discs`
--
ALTER TABLE `curso_discs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estudantes`
--
ALTER TABLE `estudantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mensagems`
--
ALTER TABLE `mensagems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `prof_departs`
--
ALTER TABLE `prof_departs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prof_discs`
--
ALTER TABLE `prof_discs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publicacaos`
--
ALTER TABLE `publicacaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turma_prof_discs`
--
ALTER TABLE `turma_prof_discs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD CONSTRAINT `arquivos_publicacao_id_foreign` FOREIGN KEY (`publicacao_id`) REFERENCES `publicacaos` (`id`);

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_publicacao_id_foreign` FOREIGN KEY (`publicacao_id`) REFERENCES `publicacaos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`);

--
-- Limitadores para a tabela `curso_discs`
--
ALTER TABLE `curso_discs`
  ADD CONSTRAINT `curso_discs_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `curso_discs_disciplina_id_foreign` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplinas` (`id`);

--
-- Limitadores para a tabela `estudantes`
--
ALTER TABLE `estudantes`
  ADD CONSTRAINT `estudantes_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `estudantes_turma_id_foreign` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `estudantes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `mensagems`
--
ALTER TABLE `mensagems`
  ADD CONSTRAINT `mensagems_destino_foreign` FOREIGN KEY (`destino`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `mensagems_origem_foreign` FOREIGN KEY (`origem`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `prof_departs`
--
ALTER TABLE `prof_departs`
  ADD CONSTRAINT `prof_departs_id_dep_foreign` FOREIGN KEY (`id_dep`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `prof_departs_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `professors` (`nif`);

--
-- Limitadores para a tabela `prof_discs`
--
ALTER TABLE `prof_discs`
  ADD CONSTRAINT `prof_discs_disciplina_id_foreign` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplinas` (`id`),
  ADD CONSTRAINT `prof_discs_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`nif`);

--
-- Limitadores para a tabela `publicacaos`
--
ALTER TABLE `publicacaos`
  ADD CONSTRAINT `publicacaos_ibfk_1` FOREIGN KEY (`turma_prof_disc_id`) REFERENCES `turma_prof_discs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `turmas_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`);

--
-- Limitadores para a tabela `turma_prof_discs`
--
ALTER TABLE `turma_prof_discs`
  ADD CONSTRAINT `turma_prof_discs_pd_id_foreign` FOREIGN KEY (`pd_id`) REFERENCES `prof_discs` (`id`),
  ADD CONSTRAINT `turma_prof_discs_turma_id_foreign` FOREIGN KEY (`turma_id`) REFERENCES `turmas` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_dep_foreign` FOREIGN KEY (`id_dep`) REFERENCES `departamentos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
