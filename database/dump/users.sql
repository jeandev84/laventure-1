--
-- PostgreSQL database dump
--

-- Dumped from database version 13.6 (Ubuntu 13.6-1.pgdg21.10+1)
-- Dumped by pg_dump version 14.2 (Ubuntu 14.2-1.pgdg21.10+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    email character varying(255) NOT NULL,
    username character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    address text,
    code character varying(6),
    city character varying(255)
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, email, username, password, address, code, city) FROM stdin;
4	lucy@hotmail.com	Lucy	$2y$10$VnDjtPD/1rUur2TByWnsaeyXKfpO76fjJ/A4v2ipPDpJE447zc9yi	г.Санкт-Петербург ул. победа дом 8 к 1 кв 208	001985	Санкт-Петербург
6	antonio4@yahoo.fr	antonio4	$2y$10$VDeXkMQt/NCxBmWHm5tO4.OO0/gmXMcacSxY8VQOGEwaKI9/WAnPW	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Санкт-Петербург
7	fake4@yahoo.fr	fake	$2y$10$TEvP6Km9oehaTp6j/O1O1e4lUBXiRC//6bvsrRpkf.nqDL5GWoSDq	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya
17	fake8@yahoo.fr	fake8	$2y$10$.HhhxiTiQanPTuZbnUvIZusNOYrr2Q7O7Jm/0lMLoIQ2cVmgyEj7.	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya8
5	admin1@hotmail.com	admin	$2y$10$SnanhlQGmjIjO8uJ/WBUV.N1bLlLJeXIFBG7FqqHE0NmZ418.7Dlq	Kazan Oblast, rue Innopolis dom 22 appt 304	1965	Kazan Oblast
2	jeanyao@ymail.com	Жан-Клод	$2y$10$sInjRbSS0offbyTKIpSSKeJk67eA5m4tYRkAH96UdcGrxt1FMA1CW	Головинское шоссе дом 8 к 2а, кв 1009	001984	Москва
3	micha1@yahoo.fr	Яо Мишель Жан-Клодовна	$2y$10$9WQb6cgFMjnY.1S7KEm0oeNBWaXgSWXtYDYWVtUzTUy6wjN7V8ve2	Головинское шоссе дом 8 к 2а, кв 1009	002016	Москва
9	fake0@yahoo.fr	fake0	$2y$10$epjcbX84z3kbmFvzwR0SiOhyo6T7nZb3SIK0gdzL8VWi3DQfffzSS	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya0
10	fake1@yahoo.fr	fake1	$2y$10$nTXY9Brlr05Dtmku8QBstOYJyIDxYz2OpViSn.dNjJNiNnm6Ezv/i	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya1
11	fake2@yahoo.fr	fake2	$2y$10$9XqZWg3jIfLLfkZThwFKSuU7I9tPlGT64ysroVL9vv6xzYj4A.l2S	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya2
12	fake3@yahoo.fr	fake3	$2y$10$cLMwCadaOcvYA86/UUmX4ekiil4IG0gsqIldDKjAB6Xct4tdGPOBW	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya3
13	fake4@yahoo.fr	fake4	$2y$10$yjP.vsx64emGojnX930zM.Y5pGo5SJWP23K/KgYYUUjx8G95CFxGK	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya4
14	fake5@yahoo.fr	fake5	$2y$10$Lwvo..tgbA.NujoCW8al4.OJgQCtsCOGpAuFNW/9.MT7n8Hs7XcTy	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya5
15	fake6@yahoo.fr	fake6	$2y$10$BNvgKBbBmVs0ruFBnXA4oOvMFrI.Ec5ndjWM0VFFCm.172uVjuqLG	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya6
18	fake9@yahoo.fr	fake9	$2y$10$Va/6zSDfgwAEXYRYg2SjjuRYstfAYA1CXEGtCHr4kaQYX6kw3Vne.	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya9
16	fake7@yahoo.fr	fake7	$2y$10$eP5aneKsHRuoIx53dl8VP.qYSE6D7BX2Mgmrb14joNP5PSg/dqTMq	Санкт-Петербург  ул. Победа дом 8 к 1 кв 201		Kalushkaya7
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 18, true);


--
-- Name: users users_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pk PRIMARY KEY (id);


--
-- Name: users_id_uindex; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX users_id_uindex ON public.users USING btree (id);


--
-- PostgreSQL database dump complete
--

