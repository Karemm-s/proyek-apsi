/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/16/2026 9:04:19 PM                        */
/*==============================================================*/


drop table if exists AUDIT_LOG_UNMASKING;

drop table if exists BUKTI_LAMPIRAN;

drop table if exists ESKALASI_PIMPINAN;

drop table if exists FEEDBACK_PSIKOLOG;

drop table if exists LAPORAN_KASUS;

drop table if exists PEMANGGILAN_SP;

drop table if exists PENUGASAN_SATGAS;

drop table if exists ROLES;

drop table if exists RUJUKAN_LAYANAN;

drop table if exists USERS;

/*==============================================================*/
/* Table: AUDIT_LOG_UNMASKING                                   */
/*==============================================================*/
create table AUDIT_LOG_UNMASKING
(
   ID_LOG               int not null,
   ID_LAPORAN           int not null,
   ID_USER              int not null,
   ALASAN_UNMASKING     text,
   TIMESTAMP            timestamp,
   primary key (ID_LOG)
);

/*==============================================================*/
/* Table: BUKTI_LAMPIRAN                                        */
/*==============================================================*/
create table BUKTI_LAMPIRAN
(
   ID_BUKTI             int not null,
   ID_LAPORAN           int not null,
   NAMA_FILE            varchar(50),
   FILE_PATH            varchar(100),
   JENIS_FILE           varchar(30),
   UPLOADED_AT          timestamp,
   primary key (ID_BUKTI)
);

/*==============================================================*/
/* Table: ESKALASI_PIMPINAN                                     */
/*==============================================================*/
create table ESKALASI_PIMPINAN
(
   ID_ESKALASI          int not null,
   ID_LAPORAN           int not null,
   ID_PEMANGGILAN       bigint,
   JENIS_ESKALASI       varchar(100),
   ALASAN_ESKALASI      text,
   PATH_BERKAS_PIMPINAN varchar(100),
   STATUS_TINDAKAN_PIMPINAN varchar(100),
   CREATE_AT_EP         timestamp,
   primary key (ID_ESKALASI)
);

/*==============================================================*/
/* Table: FEEDBACK_PSIKOLOG                                     */
/*==============================================================*/
create table FEEDBACK_PSIKOLOG
(
   ID_FEEDBACK          bigint not null,
   ID_USER              int not null,
   ID_RUJUKAN           int not null,
   RINGKASAN_KONDISI_KORBRINGKASAN_PENDAMPINGANAN text,
   REKOM_TINDAKAN_LANJUT text,
   SUBMITTED_AT         timestamp,
   PEMBARUAN_KONDISI_KORBAN text,
   primary key (ID_FEEDBACK)
);

/*==============================================================*/
/* Table: LAPORAN_KASUS                                         */
/*==============================================================*/
create table LAPORAN_KASUS
(
   ID_LAPORAN           int not null,
   ID_USER              int not null,
   ID_ESKALASI          int,
   NO_TIKET             varchar(10),
   KATEGORI_PELAPOR     varchar(20),
   BENTUK_KEJADIAN      text,
   WAKTU_KEJADIAN       timestamp,
   LOKASI_KEJADIAN      varchar(20),
   NAMA_TERLAPOR        varchar(30),
   HARAPAN_KORBAN       text,
   STATUS_KASUS         varchar(20),
   IS_IDENTITY_MASKED   bool,
   CREATE_AT_LK         timestamp,
   TANGGA_KEJADIAN      date,
   KRONOLOGI_KEJADIAN   text,
   primary key (ID_LAPORAN)
);

/*==============================================================*/
/* Table: PEMANGGILAN_SP                                        */
/*==============================================================*/
create table PEMANGGILAN_SP
(
   ID_PEMANGGILAN       bigint not null,
   ID_LAPORAN           int not null,
   ID_ESKALASI          int,
   SP_LEVEL             varchar(50),
   TGL_PEMANGGILAN      date,
   LOKASI_PEMANGGILAN   varchar(100),
   PIHAK_DIPANGGIL      varchar(50),
   STATUS_KEHADIRAN     varchar(50),
   PATH_DRAFT_SURAT     varchar(100),
   CREATE_AT_SP         timestamp,
   primary key (ID_PEMANGGILAN)
);

/*==============================================================*/
/* Table: PENUGASAN_SATGAS                                      */
/*==============================================================*/
create table PENUGASAN_SATGAS
(
   ID_PENUGASAN         int not null,
   ID_LAPORAN           int not null,
   ID_USER              int not null,
   ASSIGNED_AT          timestamp,
   primary key (ID_PENUGASAN)
);

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES
(
   ID_ROLE              int not null,
   NAMA_ROLE            varchar(100),
   primary key (ID_ROLE)
);

/*==============================================================*/
/* Table: RUJUKAN_LAYANAN                                       */
/*==============================================================*/
create table RUJUKAN_LAYANAN
(
   ID_RUJUKAN           int not null,
   ID_FEEDBACK          bigint,
   ID_LAPORAN           int not null,
   JENIS_RUJUKAN        varchar(150),
   TUJUAN_INSTANSI      varchar(150),
   PATH_SURAT_RUJUKAN   varchar(100),
   JADWAL_RUJUKAN       date,
   primary key (ID_RUJUKAN)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   ID_USER              int not null,
   ID_ROLE              int not null,
   NAMA_LENGKAP         varchar(100),
   EMAIL                varchar(100),
   PASSWORD             varchar(100),
   JENKEL               varchar(20),
   CREATE_AT_USER       timestamp,
   primary key (ID_USER)
);

alter table AUDIT_LOG_UNMASKING add constraint FK_DIREKAM foreign key (ID_LAPORAN)
      references LAPORAN_KASUS (ID_LAPORAN) on delete restrict on update restrict;

alter table AUDIT_LOG_UNMASKING add constraint FK_MELAKUKAN foreign key (ID_USER)
      references USERS (ID_USER) on delete restrict on update restrict;

alter table BUKTI_LAMPIRAN add constraint FK_MELAMPIRKAN foreign key (ID_LAPORAN)
      references LAPORAN_KASUS (ID_LAPORAN) on delete restrict on update restrict;

alter table ESKALASI_PIMPINAN add constraint FK_DIESKALASI2 foreign key (ID_LAPORAN)
      references LAPORAN_KASUS (ID_LAPORAN) on delete restrict on update restrict;

alter table ESKALASI_PIMPINAN add constraint FK_MENJADI_DASAR2 foreign key (ID_PEMANGGILAN)
      references PEMANGGILAN_SP (ID_PEMANGGILAN) on delete restrict on update restrict;

alter table FEEDBACK_PSIKOLOG add constraint FK_MEMBERI foreign key (ID_USER)
      references USERS (ID_USER) on delete restrict on update restrict;

alter table FEEDBACK_PSIKOLOG add constraint FK_MENERIMA2 foreign key (ID_RUJUKAN)
      references RUJUKAN_LAYANAN (ID_RUJUKAN) on delete restrict on update restrict;

alter table LAPORAN_KASUS add constraint FK_DIESKALASI foreign key (ID_ESKALASI)
      references ESKALASI_PIMPINAN (ID_ESKALASI) on delete restrict on update restrict;

alter table LAPORAN_KASUS add constraint FK_MEMBUAT foreign key (ID_USER)
      references USERS (ID_USER) on delete restrict on update restrict;

alter table PEMANGGILAN_SP add constraint FK_MENGHASILKAN foreign key (ID_LAPORAN)
      references LAPORAN_KASUS (ID_LAPORAN) on delete restrict on update restrict;

alter table PEMANGGILAN_SP add constraint FK_MENJADI_DASAR foreign key (ID_ESKALASI)
      references ESKALASI_PIMPINAN (ID_ESKALASI) on delete restrict on update restrict;

alter table PENUGASAN_SATGAS add constraint FK_DITANGANI foreign key (ID_LAPORAN)
      references LAPORAN_KASUS (ID_LAPORAN) on delete restrict on update restrict;

alter table PENUGASAN_SATGAS add constraint FK_DITUGASKAN foreign key (ID_USER)
      references USERS (ID_USER) on delete restrict on update restrict;

alter table RUJUKAN_LAYANAN add constraint FK_DIRUJUK foreign key (ID_LAPORAN)
      references LAPORAN_KASUS (ID_LAPORAN) on delete restrict on update restrict;

alter table RUJUKAN_LAYANAN add constraint FK_MENERIMA foreign key (ID_FEEDBACK)
      references FEEDBACK_PSIKOLOG (ID_FEEDBACK) on delete restrict on update restrict;

alter table USERS add constraint FK_DIMILIKI foreign key (ID_ROLE)
      references ROLES (ID_ROLE) on delete restrict on update restrict;
