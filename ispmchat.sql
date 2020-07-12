-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2020 às 15:44
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `file`, `publicacao_id`, `created_at`, `updated_at`) VALUES
(1, '144720202007065f033978cf0b1.bin', 4, '2020-07-06 13:47:21', '2020-07-06 13:47:21'),
(2, '145300202007065f033acc5c112.png', 5, '2020-07-06 13:53:00', '2020-07-06 13:53:00'),
(3, '145300202007065f033acc6ee43.png', 5, '2020-07-06 13:53:00', '2020-07-06 13:53:00'),
(4, '145300202007065f033acc92451.jpeg', 5, '2020-07-06 13:53:00', '2020-07-06 13:53:00'),
(5, '104716202007075f0452b44c950.png', 6, '2020-07-07 09:47:17', '2020-07-07 09:47:17'),
(6, '104717202007075f0452b5230fb.png', 6, '2020-07-07 09:47:17', '2020-07-07 09:47:17'),
(7, '104717202007075f0452b53871f.html', 6, '2020-07-07 09:47:18', '2020-07-07 09:47:18');

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
(1, 'dghvb dtrfh', 6, 13, '2020-07-07 11:16:48', '2020-07-07 11:16:48'),
(2, 'flcgl serfilk, eprfk', 6, 16, '2020-07-07 11:29:07', '2020-07-07 11:29:07'),
(3, 'oisas', 6, 18, '2020-07-07 11:56:24', '2020-07-07 11:56:24'),
(4, 'dxtghb', 6, 13, '2020-07-07 21:06:46', '2020-07-07 21:06:46'),
(5, 'sxdfgvs ewrsd', 6, 13, '2020-07-08 09:34:45', '2020-07-08 09:34:45'),
(6, 'jhgn, ukty', 6, 13, '2020-07-08 09:56:20', '2020-07-08 09:56:20'),
(7, 'mhghjjmk', 6, 13, '2020-07-08 09:56:57', '2020-07-08 09:56:57'),
(8, 'domingos fernando', 6, 13, '2020-07-08 10:00:07', '2020-07-08 10:00:07'),
(9, 'edigar mateus', 6, 13, '2020-07-08 10:07:00', '2020-07-08 10:07:00'),
(10, 'Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.', 6, 13, '2020-07-08 10:13:01', '2020-07-08 10:13:01'),
(11, 'kkkkk', 6, 18, '2020-07-08 10:44:03', '2020-07-08 10:44:03'),
(12, 'what am I going to do now', 6, 13, '2020-07-08 10:45:44', '2020-07-08 10:45:44'),
(13, 'dfgsrd wrsdtgwed', 6, 13, '2020-07-08 10:58:35', '2020-07-08 10:58:35');

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
(1, 'Engenharia de Informatica', '5', 2, NULL, '2020-06-29 09:01:00', '2020-06-29 09:04:17'),
(2, 'Biologia', '4', 3, NULL, '2020-07-02 10:16:28', '2020-07-02 10:16:28'),
(3, 'Direito', '5', 3, NULL, '2020-07-06 09:02:05', '2020-07-06 09:02:05'),
(4, 'Direito', '5', 1, NULL, '2020-07-06 09:13:54', '2020-07-06 09:13:54'),
(5, 'ELECTROTECNIA', '5', 1, NULL, '2020-07-06 11:24:45', '2020-07-06 11:24:45'),
(6, 'ELECTÓNICA', '4', 1, NULL, '2020-07-06 11:26:46', '2020-07-06 11:26:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso_discs`
--

CREATE TABLE `curso_discs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disciplina_id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `curso_discs`
--

INSERT INTO `curso_discs` (`id`, `disciplina_id`, `curso_id`, `descricao`, `created_at`, `updated_at`) VALUES
(3, 2, 2, 'descricao', '2020-07-02 12:29:34', '2020-07-02 12:29:52'),
(4, 5, 5, 'ESTA DISCIPLINA TEM COMO APLICAÇÃO PRÁTICA DESENVOLVER ARGUMENTOS PARA...', '2020-07-06 11:28:21', '2020-07-06 11:28:21');

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
(1, 'DCT', NULL, '2020-07-06 11:25:08'),
(2, 'Ciência e Tecnologia', '2020-06-29 09:50:28', '2020-06-29 09:50:28'),
(3, 'CEE', '2020-06-29 09:50:28', '2020-06-29 09:50:28'),
(4, 'DCT', '2020-06-29 09:39:21', '2020-07-02 09:36:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome`, `caract`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'programação', 'anual', 'O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode', '2020-06-29 10:05:03', '2020-06-29 10:05:03'),
(2, 'Informatica', 'Anual', 'sadasdasdasdasdasdasdsadas', '2020-07-02 12:16:50', '2020-07-02 12:16:50'),
(3, 'LÓGICA COMPUTACIONAL', 'TEÓRICO / PRÁTICA', 'TEÓRICO / PRÁTICA COM MAIOR ÊNFASE EM CADEIRAS PRATICAS', '2020-07-06 11:06:38', '2020-07-06 11:06:38'),
(4, 'SISTEMAS LÓGICOS', 'PRÁTICA', 'TEÓRICO / PRÁTICATEÓRICO / PRÁTICATEÓRICO / PRÁTICATEÓRICO / PRÁTICATEÓRICO / PRÁTICA', '2020-07-06 11:07:25', '2020-07-06 11:07:25'),
(5, 'INTELIGÊNCIA ARTIFICIAL', 'PRÁTICA', 'Devem todos os estudantes e professores, fazerem o uso de máscaras faciais no decorrer das aulas. Em caso de alguma', '2020-07-06 11:11:11', '2020-07-06 11:11:11');

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
  `anoacad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `numero`, `fullname`, `turno`, `data_nasc`, `genero`, `user_id`, `curso_id`, `turma_id`, `created_at`, `updated_at`, `anoacad`) VALUES
(1, 141090001, 'domingos fernando', 'Manhã', '2020-07-09', '1', 9, 1, 1, '2020-07-02 09:32:24', '2020-07-02 09:32:24', 1),
(2, 123834, 'Fernando Lírio', 'Noite', '2020-07-30', 'masculino', 16, 6, 5, '2020-07-06 11:56:07', '2020-07-06 11:56:07', 1),
(3, 6998778, 'Mingas', 'Tarde', '2020-07-29', 'masculino', 17, 6, 6, '2020-07-06 11:56:48', '2020-07-06 11:56:48', 5),
(4, 12234, 'Sérgio', 'Noite', '2020-07-29', 'feminino', 18, 4, 5, '2020-07-06 11:57:47', '2020-07-06 11:57:47', 2),
(5, 1234000, 'Bernardo Silva', 'Manhã', '2020-07-29', 'feminino', 19, 1, 4, '2020-07-06 12:55:58', '2020-07-06 12:55:58', 3);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `mensagems`
--

INSERT INTO `mensagems` (`id`, `mensagem`, `file`, `origem`, `destino`, `created_at`, `updated_at`) VALUES
(1, 'asrzjdfk,kced', '', 18, 13, NULL, NULL),
(2, 'qual mensagem', NULL, 13, 18, '2020-07-08 07:43:44', '2020-07-08 07:43:44'),
(3, 'qual mensagem', NULL, 13, 18, '2020-07-08 07:43:49', '2020-07-08 07:43:49'),
(4, 'Aquela mensagem', NULL, 18, 13, '2020-07-08 07:45:55', '2020-07-08 07:45:55'),
(5, 'qual mensagem sfdtg werst', NULL, 13, 18, '2020-07-08 07:46:45', '2020-07-08 07:46:45'),
(6, 'asjdfhasjfhajsf', NULL, 18, 13, '2020-07-08 07:48:13', '2020-07-08 07:48:13'),
(7, 'ola', NULL, 18, 13, '2020-07-08 07:48:53', '2020-07-08 07:48:53'),
(8, 'fsdfsdf', NULL, 18, 13, '2020-07-08 07:49:19', '2020-07-08 07:49:19'),
(9, 'qual mensagem sfdtg werst esrgd', NULL, 13, 18, '2020-07-08 07:49:27', '2020-07-08 07:49:27'),
(10, 'esperandp', NULL, 18, 13, '2020-07-08 07:50:56', '2020-07-08 07:50:56'),
(11, 'qual mensagem sfdtg werst esrdftfwed', NULL, 13, 18, '2020-07-08 07:50:58', '2020-07-08 07:50:58'),
(12, 'dfgvb gdxch fdc', NULL, 13, 18, '2020-07-08 07:57:34', '2020-07-08 07:57:34'),
(13, 'dftfv', NULL, 13, 18, '2020-07-08 08:11:58', '2020-07-08 08:11:58'),
(14, 'xfcg  gyh', NULL, 13, 18, '2020-07-08 08:12:36', '2020-07-08 08:12:36'),
(15, 'rfyb yfg', NULL, 13, 18, '2020-07-08 08:12:46', '2020-07-08 08:12:46'),
(16, 'uhuh', NULL, 13, 18, '2020-07-08 08:14:54', '2020-07-08 08:14:54'),
(17, 'dfsdf', NULL, 18, 13, '2020-07-08 08:17:02', '2020-07-08 08:17:02'),
(18, 'srxfcgbg', NULL, 13, 18, '2020-07-08 08:17:07', '2020-07-08 08:17:07'),
(19, 'sedrxfcg', NULL, 13, 18, '2020-07-08 08:17:31', '2020-07-08 08:17:31'),
(20, 'Zinga', NULL, 13, 18, '2020-07-08 08:20:57', '2020-07-08 08:20:57'),
(21, 'easrfwesd wrsde', NULL, 13, 18, '2020-07-08 08:20:59', '2020-07-08 08:20:59'),
(22, 'oi', NULL, 18, 13, '2020-07-08 08:21:16', '2020-07-08 08:21:16'),
(23, 'aedfz raszdf', NULL, 13, 18, '2020-07-08 08:21:35', '2020-07-08 08:21:35'),
(24, 'ddr', NULL, 13, 18, '2020-07-08 08:21:36', '2020-07-08 08:21:36'),
(25, 'dsjhfhsdhg', NULL, 18, 13, '2020-07-08 08:41:33', '2020-07-08 08:41:33'),
(26, 'hgghgf', NULL, 13, 18, '2020-07-08 09:56:03', '2020-07-08 09:56:03'),
(27, 'rsdtyh', NULL, 13, 18, '2020-07-08 11:34:57', '2020-07-08 11:34:57'),
(28, 'dfsdf', NULL, 18, 13, '2020-07-08 11:56:31', '2020-07-08 11:56:31'),
(29, '4werwe', NULL, 18, 13, '2020-07-08 12:25:04', '2020-07-08 12:25:04');

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
(3243245, 'Higino', 'Licenciado', 'Higino@ispm.co.ao', 'Ciencia da Computação', '2847', 13, '2020-07-03 08:36:16', '2020-07-03 08:36:37'),
(123452456, 'Domingos Fernando', 'Licenciado', 'domingosFernando@gmail.com', 'Engenharia Informatica', '+244932598300', 12, '2020-07-03 08:14:54', '2020-07-03 08:14:54'),
(13498753393, 'Zinga Rene', 'Licenciado', 'zingarene@ispm.co.ao', 'Licenciado', '91234345', 14, '2020-07-03 08:37:58', '2020-07-03 08:37:58');

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
(7, 3243245, 1, '2020-07-03 11:54:44', '2020-07-03 11:54:44'),
(9, 123452456, 2, '2020-07-06 07:56:06', '2020-07-06 07:56:06'),
(10, 3243245, 3, '2020-07-06 08:13:13', '2020-07-06 08:13:13'),
(12, 123452456, 1, '2020-07-06 08:59:53', '2020-07-06 08:59:53'),
(13, 13498753393, 3, '2020-07-06 11:23:42', '2020-07-06 11:23:42');

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
(1, 1, 3243245, NULL, '2020-07-06 09:42:57', '2020-07-06 09:42:57');

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
(2, 'dfxgv', 'sdtgf setdyfg', 1, '2020-07-06 13:41:13', '2020-07-06 13:41:13'),
(4, 'sdfgesfdg', 'stdhgb', 2, '2020-07-06 13:47:20', '2020-07-06 13:47:20'),
(5, 'sdxf tdyhet tsygewd', 'sdlfk kj,bvseld rgfujjrf', 1, '2020-07-06 13:53:00', '2020-07-06 13:53:00'),
(6, 'File Storage - Laravel - The PHP Framework For Web Artisans', 'Deu para entender? Quando são múltiplos envios a variável que identifica o campo de upload é a mesma quando é um arquivo, acontece que cada índice é um novo array, de acordo com a quantidade de campos de upload. Se eu quero saber o nome e tamanho do segundo arquivo, simplesmente atuo num array normalmente:\r\n\r\n$_FILES[\"fotos\"][\"name\"][0];\r\n\r\n$_FILES[\"fotos\"][\"size\"][0];\r\n\r\nC) Como as informações do upload estão num array, é iterado normalmente por ela (usando um loop for) como se fosse um outro array qualquer!\r\n\r\nD) Para cada índice, é passado o valor da iteração para novas variáveis: $Nome, $Tamanho, $Tipo e $Tmpname, que contêm informações diretas sobre o arquivo, como se fosse o upload de um só arquivo:\r\n\r\n\r\n\r\nRead more: http://www.linhadecodigo.com.br/artigo/970/php-formularios-e-upload-de-multiplos-arquivos-e-fotos.aspx#ixzz6RVMNwOHT', 1, '2020-07-07 09:47:16', '2020-07-07 09:47:16');

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
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `curso_id`, `ano`, `periodo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'dasklx', 2, 1, 'tarde', 'asdfilk', NULL, NULL),
(2, 'mana', 2, 5, 'manha', 'dkdkfdkfk dkdkdfks', '2020-07-02 12:25:25', '2020-07-02 12:25:25'),
(4, 'primeiro ano', 2, 5, 'manha', 'senhor...', '2020-07-03 11:47:54', '2020-07-03 11:47:54'),
(5, 'turma A', 4, 2, 'tarde', 'senh', '2020-07-06 08:18:29', '2020-07-06 09:22:48'),
(6, 'Segundo ano', 1, 4, 'manha', 'Descrição sobre o curso', '2020-07-06 08:54:53', '2020-07-06 08:54:53'),
(7, 'C', 5, 3, 'tarde', 'Devem todos os estudantes e professores', '2020-07-06 11:30:16', '2020-07-06 11:30:16');

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
(1, 5, 1, '2020-07-06 09:42:57', '2020-07-06 09:42:57'),
(2, 6, 1, '2020-07-06 09:56:52', '2020-07-06 09:56:52');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `categoria`, `id_dep`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Higino', 'higino@gmail.com', NULL, '$2y$10$.6W53cVvVzxMU1VfffvPrebWz9QXRAKtQRviqv71U7Mwl.Gri0vPW', 'cordenador', 2, NULL, '2020-06-29 09:53:41', '2020-06-29 09:53:41'),
(7, 'Domingos', 'Domingos@gmail.com', NULL, '$2y$10$.WsriqQ.KaaNFUkFNjNXF.lkydgTFZgUGFms8B0NY57C3iIxcQZb2', 'cordenador', 3, NULL, '2020-06-29 09:55:05', '2020-06-29 09:55:05'),
(8, 'Zinga', 'zinga@gmail.com', NULL, '$2y$10$XnydjUy4OShFIyCbN.gMtO5wdNmFvDoSPusxz/EXMdG72DG5gnvn.', 'cordenador', 1, NULL, '2020-06-29 09:55:43', '2020-06-29 09:55:43'),
(9, 'domingos fernando', 'domingosf@gmail.com', NULL, '$2y$10$z5I5I8Ntm3gD35jW6hWbX.PnhV4f3.5i0JH2JfaG56c7pHb1.G5QS', 'Estudante', NULL, NULL, '2020-07-02 09:32:24', '2020-07-02 09:32:24'),
(10, 'ADMIN', 'admin@gmail.com', NULL, '$2y$10$xTDSyOtlBPNMyxYcZm1hPOaFwDYTDiW6n6M3ATs70mM361sBbnLQS', 'Gestor', NULL, NULL, '2020-07-02 09:35:23', '2020-07-02 09:35:23'),
(12, 'Domingos Fernando', 'domingosFernando@gmail.com', NULL, '$2y$10$TJvo.t/TBLACv28ifHgwVeuCEOT878yqgrnk5mPH/fUFYlnLSXZjq', 'Professor', NULL, NULL, '2020-07-03 08:14:54', '2020-07-03 08:14:54'),
(13, 'Higino', 'Higino@ispm.co.ao', NULL, '$2y$10$TDxryUgnuoD1hmpPHsQ4..mcg6sq7sX6XCIMRkR.NsrIu3x5qLumi', 'Professor', NULL, NULL, '2020-07-03 08:36:15', '2020-07-03 08:36:15'),
(14, 'Zinga Rene', 'zingarene@ispm.co.ao', NULL, '$2y$10$ejctbHe1KVVtBS2pmzO7..lrCuM6V2506KPzi.Isl2VnE9dkOReSC', 'Professor', NULL, NULL, '2020-07-03 08:37:58', '2020-07-03 08:37:58'),
(16, 'Fernando Lírio', 'fernando@gmail.com', NULL, '$2y$10$eexWZvik8hq6v2aJK4VzKuQnBV2J1IpGpzC46CPXVHXXkufgV7tpK', 'Estudante', NULL, NULL, '2020-07-06 11:56:07', '2020-07-06 11:56:07'),
(17, 'Mingas', 'minga@gmail.com', NULL, '$2y$10$NOVfgiVZwngsgRLkeL3noefX2/cV7Kaejmqc5WCfBgiImbGIHQ4AS', 'Estudante', NULL, NULL, '2020-07-06 11:56:48', '2020-07-06 11:56:48'),
(18, 'Sérgio', 'sergio@gmail.com', NULL, '$2y$10$z5I5I8Ntm3gD35jW6hWbX.PnhV4f3.5i0JH2JfaG56c7pHb1.G5QS', 'Estudante', NULL, NULL, '2020-07-06 11:57:47', '2020-07-06 11:57:47'),
(19, 'Bernardo Silva', 'bernardo@gmail.com', NULL, '$2y$10$kWEuALvYKvB.scmELZ0BM.m.7h6vw30IiX2YX9phgHUIILliQtuZe', 'Estudante', NULL, NULL, '2020-07-06 12:55:58', '2020-07-06 12:55:58');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `curso_discs`
--
ALTER TABLE `curso_discs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `prof_departs`
--
ALTER TABLE `prof_departs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prof_discs`
--
ALTER TABLE `prof_discs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicacaos`
--
ALTER TABLE `publicacaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `turma_prof_discs`
--
ALTER TABLE `turma_prof_discs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  ADD CONSTRAINT `comentarios_publicacao_id_foreign` FOREIGN KEY (`publicacao_id`) REFERENCES `publicacaos` (`id`),
  ADD CONSTRAINT `comentarios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
  ADD CONSTRAINT `publicacaos_ibfk_1` FOREIGN KEY (`turma_prof_disc_id`) REFERENCES `turma_prof_discs` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
