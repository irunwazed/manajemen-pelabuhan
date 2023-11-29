const knex = require('knex')({
  client: 'pg',
  searchPath: ['public', 'kgb', 'rbac', 'referensi', 'unit_kerja', 'statistik', 'tb_ib', 'diklat', 'riwayat', 'helpdesk'],
  connection: {
    host: process.env.DATABASE_PG_URL,
    user: process.env.DATABASE_PG_USERNAME,
    password: process.env.DATABASE_PG_PASSWORD,
    database: process.env.DATABASE_PG,
    port: process.env.DATABASE_PG_PORT,
    multipleStatements: true
  },
  pool: { min: 0, max: 5000 },
  acquireConnectionTimeout: 10000,
  log: {
    warn(message) {
      console.log('warn :  ' + message);
    },
    error(message) {
      console.log('error :  ' + message);
    },
    deprecate(message) {
      console.log('deprecated :  ' + message);
    },
    debug(message) {
      console.log('debug :  ' + message);
    },
  }
});

const knex_absensi = require('knex')({
  client: 'pg',
  connection: {
    host: process.env.DATABASE_PG_ABSENSI_URL,
    user: process.env.DATABASE_PG_ABSENSI_USERNAME,
    password: process.env.DATABASE_PG_ABSENSI_PASSWORD,
    database: process.env.DATABASE_PG_ABSENSI,
    port: process.env.DATABASE_PG_ABSENSI_PORT,
    multipleStatements: true
  },
  pool: {
    min: 0,
    max: 5000,
    afterCreate: function (connection, callback) {
      connection.query('SET timezone = utc;', function (err) {
        callback(err, connection);
      });
    }
  },
  acquireConnectionTimeout: 10000,
  log: {
    warn(message) {
      console.log('warn :  ' + message);
    },
    error(message) {
      console.log('error :  ' + message);
    },
    deprecate(message) {
      console.log('deprecated :  ' + message);
    },
    debug(message) {
      console.log('debug :  ' + message);
    },
  }
});

const bookshelf = require('bookshelf')(knex)
const bookshelf_absensi = require('bookshelf')(knex_absensi)

knex.raw("SELECT 1").then(() => {
  console.log("PostgreSQL connected to ", process.env.DATABASE_PG_URL);
})
  .catch((e) => {
    console.log("PostgreSQL not connected");
    console.error(e);
  });

knex_absensi.raw("SELECT 1").then(() => {
  console.log("PostgreSQL connected", process.env.DATABASE_PG_ABSENSI_URL);
})
  .catch((e) => {
    console.log("PostgreSQL not connected");
    console.error(e);
  });

// knex_absensi.raw("SELECT CURRENT_TIMESTAMP").then((value) => {
//   console.log(value);
// })
// .catch((e) => {
//   console.log("PostgreSQL not connected");
//   console.error(e);
// });


const { attachPaginate } = require('knex-paginate');
attachPaginate();

module.exports = {
  knex,
  bookshelf,
  knex_absensi,
  bookshelf_absensi
};