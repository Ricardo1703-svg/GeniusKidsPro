PGDMP  5                     |            Prueba    16.0    16.0 c    p           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            q           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            r           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            s           1262    21427    Prueba    DATABASE     {   CREATE DATABASE "Prueba" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE "Prueba";
                postgres    false            �            1259    22240    actividades    TABLE     %  CREATE TABLE public.actividades (
    "ID_Actividad" bigint NOT NULL,
    "Tipo_Actividad" character varying(50) NOT NULL,
    "Descripcion" text NOT NULL,
    "Edad_Recomendada" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.actividades;
       public         heap    postgres    false            �            1259    22239    actividades_ID_Actividad_seq    SEQUENCE     �   CREATE SEQUENCE public."actividades_ID_Actividad_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public."actividades_ID_Actividad_seq";
       public          postgres    false    231            t           0    0    actividades_ID_Actividad_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public."actividades_ID_Actividad_seq" OWNED BY public.actividades."ID_Actividad";
          public          postgres    false    230            �            1259    22189    cache    TABLE     �   CREATE TABLE public.cache (
    key character varying(255) NOT NULL,
    value text NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache;
       public         heap    postgres    false            �            1259    22196    cache_locks    TABLE     �   CREATE TABLE public.cache_locks (
    key character varying(255) NOT NULL,
    owner character varying(255) NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache_locks;
       public         heap    postgres    false            �            1259    22221    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    22220    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    227            u           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    226            �            1259    22213    job_batches    TABLE     d  CREATE TABLE public.job_batches (
    id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    total_jobs integer NOT NULL,
    pending_jobs integer NOT NULL,
    failed_jobs integer NOT NULL,
    failed_job_ids text NOT NULL,
    options text,
    cancelled_at integer,
    created_at integer NOT NULL,
    finished_at integer
);
    DROP TABLE public.job_batches;
       public         heap    postgres    false            �            1259    22204    jobs    TABLE     �   CREATE TABLE public.jobs (
    id bigint NOT NULL,
    queue character varying(255) NOT NULL,
    payload text NOT NULL,
    attempts smallint NOT NULL,
    reserved_at integer,
    available_at integer NOT NULL,
    created_at integer NOT NULL
);
    DROP TABLE public.jobs;
       public         heap    postgres    false            �            1259    22203    jobs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.jobs_id_seq;
       public          postgres    false    224            v           0    0    jobs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.jobs_id_seq OWNED BY public.jobs.id;
          public          postgres    false    223            �            1259    22275 	   lecciones    TABLE       CREATE TABLE public.lecciones (
    "idLeccion" bigint NOT NULL,
    "nombreLeccion" character varying(255) NOT NULL,
    descripcion text NOT NULL,
    nivel bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.lecciones;
       public         heap    postgres    false            �            1259    22274    lecciones_idLeccion_seq    SEQUENCE     �   CREATE SEQUENCE public."lecciones_idLeccion_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public."lecciones_idLeccion_seq";
       public          postgres    false    237            w           0    0    lecciones_idLeccion_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."lecciones_idLeccion_seq" OWNED BY public.lecciones."idLeccion";
          public          postgres    false    236            �            1259    22249    logros    TABLE       CREATE TABLE public.logros (
    "ID_Logro" bigint NOT NULL,
    "ID_Usuario" bigint NOT NULL,
    "ID_Actividad" bigint NOT NULL,
    "Fecha_Logro" date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.logros;
       public         heap    postgres    false            �            1259    22248    logros_ID_Logro_seq    SEQUENCE     ~   CREATE SEQUENCE public."logros_ID_Logro_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public."logros_ID_Logro_seq";
       public          postgres    false    233            x           0    0    logros_ID_Logro_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public."logros_ID_Logro_seq" OWNED BY public.logros."ID_Logro";
          public          postgres    false    232            �            1259    21429 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    21428    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            y           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    22266    niveles    TABLE       CREATE TABLE public.niveles (
    "idNivel" bigint NOT NULL,
    "nombreNivel" character varying(255) NOT NULL,
    descripcion text NOT NULL,
    imagen character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.niveles;
       public         heap    postgres    false            �            1259    22265    niveles_idNivel_seq    SEQUENCE     ~   CREATE SEQUENCE public."niveles_idNivel_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public."niveles_idNivel_seq";
       public          postgres    false    235            z           0    0    niveles_idNivel_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public."niveles_idNivel_seq" OWNED BY public.niveles."idNivel";
          public          postgres    false    234            �            1259    22173    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    22289    progreso    TABLE     *  CREATE TABLE public.progreso (
    "idProgreso" bigint NOT NULL,
    "ID_Usuario" bigint NOT NULL,
    "idLeccion" bigint NOT NULL,
    puntuacion integer NOT NULL,
    "fechaCompletada" date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.progreso;
       public         heap    postgres    false            �            1259    22288    progreso_idProgreso_seq    SEQUENCE     �   CREATE SEQUENCE public."progreso_idProgreso_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public."progreso_idProgreso_seq";
       public          postgres    false    239            {           0    0    progreso_idProgreso_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."progreso_idProgreso_seq" OWNED BY public.progreso."idProgreso";
          public          postgres    false    238            �            1259    22180    sessions    TABLE     �   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         heap    postgres    false            �            1259    22163    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    22162    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            |           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            �            1259    22233    usuarios    TABLE       CREATE TABLE public.usuarios (
    "ID_Usuario" bigint NOT NULL,
    "Nombre" character varying(50) NOT NULL,
    "Edad" integer NOT NULL,
    "Nivel_Educativo" character varying(50),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �            1259    22232    usuarios_ID_Usuario_seq    SEQUENCE     �   CREATE SEQUENCE public."usuarios_ID_Usuario_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public."usuarios_ID_Usuario_seq";
       public          postgres    false    229            }           0    0    usuarios_ID_Usuario_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."usuarios_ID_Usuario_seq" OWNED BY public.usuarios."ID_Usuario";
          public          postgres    false    228            �           2604    22243    actividades ID_Actividad    DEFAULT     �   ALTER TABLE ONLY public.actividades ALTER COLUMN "ID_Actividad" SET DEFAULT nextval('public."actividades_ID_Actividad_seq"'::regclass);
 I   ALTER TABLE public.actividades ALTER COLUMN "ID_Actividad" DROP DEFAULT;
       public          postgres    false    230    231    231            �           2604    22224    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    227    227            �           2604    22207    jobs id    DEFAULT     b   ALTER TABLE ONLY public.jobs ALTER COLUMN id SET DEFAULT nextval('public.jobs_id_seq'::regclass);
 6   ALTER TABLE public.jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    223    224            �           2604    22278    lecciones idLeccion    DEFAULT     ~   ALTER TABLE ONLY public.lecciones ALTER COLUMN "idLeccion" SET DEFAULT nextval('public."lecciones_idLeccion_seq"'::regclass);
 D   ALTER TABLE public.lecciones ALTER COLUMN "idLeccion" DROP DEFAULT;
       public          postgres    false    236    237    237            �           2604    22252    logros ID_Logro    DEFAULT     v   ALTER TABLE ONLY public.logros ALTER COLUMN "ID_Logro" SET DEFAULT nextval('public."logros_ID_Logro_seq"'::regclass);
 @   ALTER TABLE public.logros ALTER COLUMN "ID_Logro" DROP DEFAULT;
       public          postgres    false    233    232    233            �           2604    21432    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            �           2604    22269    niveles idNivel    DEFAULT     v   ALTER TABLE ONLY public.niveles ALTER COLUMN "idNivel" SET DEFAULT nextval('public."niveles_idNivel_seq"'::regclass);
 @   ALTER TABLE public.niveles ALTER COLUMN "idNivel" DROP DEFAULT;
       public          postgres    false    235    234    235            �           2604    22292    progreso idProgreso    DEFAULT     ~   ALTER TABLE ONLY public.progreso ALTER COLUMN "idProgreso" SET DEFAULT nextval('public."progreso_idProgreso_seq"'::regclass);
 D   ALTER TABLE public.progreso ALTER COLUMN "idProgreso" DROP DEFAULT;
       public          postgres    false    239    238    239            �           2604    22166    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            �           2604    22236    usuarios ID_Usuario    DEFAULT     ~   ALTER TABLE ONLY public.usuarios ALTER COLUMN "ID_Usuario" SET DEFAULT nextval('public."usuarios_ID_Usuario_seq"'::regclass);
 D   ALTER TABLE public.usuarios ALTER COLUMN "ID_Usuario" DROP DEFAULT;
       public          postgres    false    229    228    229            e          0    22240    actividades 
   TABLE DATA           �   COPY public.actividades ("ID_Actividad", "Tipo_Actividad", "Descripcion", "Edad_Recomendada", created_at, updated_at) FROM stdin;
    public          postgres    false    231   �u       [          0    22189    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public          postgres    false    221   ?v       \          0    22196    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public          postgres    false    222   \v       a          0    22221    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    227   yv       _          0    22213    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public          postgres    false    225   �v       ^          0    22204    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public          postgres    false    224   �v       k          0    22275 	   lecciones 
   TABLE DATA           m   COPY public.lecciones ("idLeccion", "nombreLeccion", descripcion, nivel, created_at, updated_at) FROM stdin;
    public          postgres    false    237   �v       g          0    22249    logros 
   TABLE DATA           q   COPY public.logros ("ID_Logro", "ID_Usuario", "ID_Actividad", "Fecha_Logro", created_at, updated_at) FROM stdin;
    public          postgres    false    233   �w       V          0    21429 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   *x       i          0    22266    niveles 
   TABLE DATA           h   COPY public.niveles ("idNivel", "nombreNivel", descripcion, imagen, created_at, updated_at) FROM stdin;
    public          postgres    false    235   �x       Y          0    22173    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    219   �y       m          0    22289    progreso 
   TABLE DATA           �   COPY public.progreso ("idProgreso", "ID_Usuario", "idLeccion", puntuacion, "fechaCompletada", created_at, updated_at) FROM stdin;
    public          postgres    false    239   �y       Z          0    22180    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    220    z       X          0    22163    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    218   �{       c          0    22233    usuarios 
   TABLE DATA           m   COPY public.usuarios ("ID_Usuario", "Nombre", "Edad", "Nivel_Educativo", created_at, updated_at) FROM stdin;
    public          postgres    false    229   �|       ~           0    0    actividades_ID_Actividad_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public."actividades_ID_Actividad_seq"', 3, true);
          public          postgres    false    230                       0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    226            �           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    223            �           0    0    lecciones_idLeccion_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public."lecciones_idLeccion_seq"', 5, true);
          public          postgres    false    236            �           0    0    logros_ID_Logro_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public."logros_ID_Logro_seq"', 4, true);
          public          postgres    false    232            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 54, true);
          public          postgres    false    215            �           0    0    niveles_idNivel_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public."niveles_idNivel_seq"', 4, true);
          public          postgres    false    234            �           0    0    progreso_idProgreso_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public."progreso_idProgreso_seq"', 2, true);
          public          postgres    false    238            �           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 2, true);
          public          postgres    false    217            �           0    0    usuarios_ID_Usuario_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public."usuarios_ID_Usuario_seq"', 5, true);
          public          postgres    false    228            �           2606    22247    actividades actividades_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.actividades
    ADD CONSTRAINT actividades_pkey PRIMARY KEY ("ID_Actividad");
 F   ALTER TABLE ONLY public.actividades DROP CONSTRAINT actividades_pkey;
       public            postgres    false    231            �           2606    22202    cache_locks cache_locks_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.cache_locks
    ADD CONSTRAINT cache_locks_pkey PRIMARY KEY (key);
 F   ALTER TABLE ONLY public.cache_locks DROP CONSTRAINT cache_locks_pkey;
       public            postgres    false    222            �           2606    22195    cache cache_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY public.cache
    ADD CONSTRAINT cache_pkey PRIMARY KEY (key);
 :   ALTER TABLE ONLY public.cache DROP CONSTRAINT cache_pkey;
       public            postgres    false    221            �           2606    22229    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    227            �           2606    22231 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    227            �           2606    22219    job_batches job_batches_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.job_batches
    ADD CONSTRAINT job_batches_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.job_batches DROP CONSTRAINT job_batches_pkey;
       public            postgres    false    225            �           2606    22211    jobs jobs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.jobs
    ADD CONSTRAINT jobs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.jobs DROP CONSTRAINT jobs_pkey;
       public            postgres    false    224            �           2606    22282    lecciones lecciones_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.lecciones
    ADD CONSTRAINT lecciones_pkey PRIMARY KEY ("idLeccion");
 B   ALTER TABLE ONLY public.lecciones DROP CONSTRAINT lecciones_pkey;
       public            postgres    false    237            �           2606    22254    logros logros_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.logros
    ADD CONSTRAINT logros_pkey PRIMARY KEY ("ID_Logro");
 <   ALTER TABLE ONLY public.logros DROP CONSTRAINT logros_pkey;
       public            postgres    false    233            �           2606    21434    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            �           2606    22273    niveles niveles_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.niveles
    ADD CONSTRAINT niveles_pkey PRIMARY KEY ("idNivel");
 >   ALTER TABLE ONLY public.niveles DROP CONSTRAINT niveles_pkey;
       public            postgres    false    235            �           2606    22179 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    219            �           2606    22294    progreso progreso_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.progreso
    ADD CONSTRAINT progreso_pkey PRIMARY KEY ("idProgreso");
 @   ALTER TABLE ONLY public.progreso DROP CONSTRAINT progreso_pkey;
       public            postgres    false    239            �           2606    22186    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public            postgres    false    220            �           2606    22172    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            �           2606    22170    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            �           2606    22238    usuarios usuarios_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY ("ID_Usuario");
 @   ALTER TABLE ONLY public.usuarios DROP CONSTRAINT usuarios_pkey;
       public            postgres    false    229            �           1259    22212    jobs_queue_index    INDEX     B   CREATE INDEX jobs_queue_index ON public.jobs USING btree (queue);
 $   DROP INDEX public.jobs_queue_index;
       public            postgres    false    224            �           1259    22188    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public            postgres    false    220            �           1259    22187    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public            postgres    false    220            �           2606    22283 !   lecciones lecciones_nivel_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.lecciones
    ADD CONSTRAINT lecciones_nivel_foreign FOREIGN KEY (nivel) REFERENCES public.niveles("idNivel");
 K   ALTER TABLE ONLY public.lecciones DROP CONSTRAINT lecciones_nivel_foreign;
       public          postgres    false    4796    237    235            �           2606    22260 "   logros logros_id_actividad_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.logros
    ADD CONSTRAINT logros_id_actividad_foreign FOREIGN KEY ("ID_Actividad") REFERENCES public.actividades("ID_Actividad") ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.logros DROP CONSTRAINT logros_id_actividad_foreign;
       public          postgres    false    233    4792    231            �           2606    22255     logros logros_id_usuario_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.logros
    ADD CONSTRAINT logros_id_usuario_foreign FOREIGN KEY ("ID_Usuario") REFERENCES public.usuarios("ID_Usuario") ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.logros DROP CONSTRAINT logros_id_usuario_foreign;
       public          postgres    false    229    4790    233            �           2606    22295 $   progreso progreso_id_usuario_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.progreso
    ADD CONSTRAINT progreso_id_usuario_foreign FOREIGN KEY ("ID_Usuario") REFERENCES public.usuarios("ID_Usuario") ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.progreso DROP CONSTRAINT progreso_id_usuario_foreign;
       public          postgres    false    4790    239    229            �           2606    22300 #   progreso progreso_idleccion_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.progreso
    ADD CONSTRAINT progreso_idleccion_foreign FOREIGN KEY ("idLeccion") REFERENCES public.lecciones("idLeccion") ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.progreso DROP CONSTRAINT progreso_idleccion_foreign;
       public          postgres    false    4798    239    237            e   ~   x�m��
� Dϻ_�Hq�����s.���(*���ߔ^B�9<fx�eޖ��� �k�,)�����{e;r^��j��m_��T��������Z��5��Eb��yt��%E���u4xe�1-��?�^1�      [      x������ � �      \      x������ � �      a      x������ � �      _      x������ � �      ^      x������ � �      k   �   x�m�Mj�0�ףS� M��M�M�%�FT��se'�ީ�@N_�2����Y|�o���!�t.f�����E�@G�(E?_u�0�!݆pL�$�Kҵbp2g3_�Τi���=�m�.Y?���TH�[m���LO�Oz�N����t/�l�b�é�hJ����%��-.�F�?v�vRɷ-���J���%�h����$�5�Co���jT      g   X   x�u��	�0��*܀�.[A���:�G &(�gf�dMY���ϝ��I$G�V����Jg�WFF��H������p��-�G
W��ͱ)6      V   �   x�e�]
� ��x���j�Rc��"����7������쨶 ������nf�L�';�!r�Bu�Ez�|��"��W�J����-(�Z��/.�t`'�*}���a���X{B	��#��t��t���ʱ���ψ�}H�Z�CoA"ܛ?y[�S���&���v�      i   �   x��ͽ�0����)��~I�Vh��
���K�i����~'��Cd,��vԴd��1 ���
�����R��r�$�%{:��6����s�.*�)��}�4Q.r5tk��~`������Ǵ�8��gz�w�O�ˇ���l`)s�D|'mV�      Y      x������ � �      m   H   x�m���0���] (wMZ�,�x ��?˲!](���i�^��0���SJ>+�{�l��^���u��;"�      Z   �  x�5O�r�0=���1��ٲ�R90^@v®�x���˰��_?"$Շ�z��Ҟ]����ݱ?����E�������VA���Fkb�N�U3�P�����B�#c��UV�g�S�J�H �/���3�4��Y�,�ed s�0xZ8�,��9���X?��ǩ.�_	��}|��%�5�K!v�&�E$�5Ӿ�dVs��Vkǃd������G�vk{���\�Ж��oW�j�r��ܖl��7��S�Y)>��faB�;�KNM˖�`�[�-?`�L����#Ez%S�]f��L���E�����ԟ�eb��x����"���k%6�Γ���a֘���c�J��hY��1������!%Z�Vǰ�8)CßM:�ڨ��&(*6z�,Q��`ܳ�{>���j��i"�T����?���      X   �   x�m��n�0 Eg�+�b�J�d� CI$��Bi���+;i��~}a���G�:�\Җ�R��V.
�cc�Ұ�8m�O�~�6�6����%X���S���Qӯ=���H��f��ة�� ¦(�"6�<�,���e�ZP��H�S�����5u�n�Q���Q&V��U����hA!���䁦��'��J��xL��N��?o�M      c   �   x�mϽ
1�z�)�Nv�۝`�XYۄK���ࢇ��ډ�n�`���0�	<K(��������d:�BV�m*��%p�5�E'�ij8�\����k����F�n.��Xu;a�Z�Z8�s�n<�[!�-��
_w�B�     