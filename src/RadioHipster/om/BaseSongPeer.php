<?php


/**
 * Base static class for performing query and update operations on the 'song' table.
 *
 *
 *
 * @package propel.generator.RadioHipster.om
 */
abstract class BaseSongPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'etuwebdev_radiohipster';

    /** the table name for this class */
    const TABLE_NAME = 'song';

    /** the related Propel class for this table */
    const OM_CLASS = 'Song';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SongTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the song_id field */
    const SONG_ID = 'song.song_id';

    /** the column name for the song_name field */
    const SONG_NAME = 'song.song_name';

    /** the column name for the song_year field */
    const SONG_YEAR = 'song.song_year';

    /** the column name for the song_duration field */
    const SONG_DURATION = 'song.song_duration';

    /** the column name for the user_id field */
    const USER_ID = 'song.user_id';

    /** the column name for the artiste_id field */
    const ARTISTE_ID = 'song.artiste_id';

    /** the column name for the album_id field */
    const ALBUM_ID = 'song.album_id';

    /** the column name for the sort_id field */
    const SORT_ID = 'song.sort_id';

    /** the column name for the playlist_id field */
    const PLAYLIST_ID = 'song.playlist_id';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Song objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Song[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SongPeer::$fieldNames[SongPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('SongId', 'SongName', 'SongYear', 'SongDuration', 'UserId', 'ArtisteId', 'AlbumId', 'SortId', 'PlaylistId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('songId', 'songName', 'songYear', 'songDuration', 'userId', 'artisteId', 'albumId', 'sortId', 'playlistId', ),
        BasePeer::TYPE_COLNAME => array (SongPeer::SONG_ID, SongPeer::SONG_NAME, SongPeer::SONG_YEAR, SongPeer::SONG_DURATION, SongPeer::USER_ID, SongPeer::ARTISTE_ID, SongPeer::ALBUM_ID, SongPeer::SORT_ID, SongPeer::PLAYLIST_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SONG_ID', 'SONG_NAME', 'SONG_YEAR', 'SONG_DURATION', 'USER_ID', 'ARTISTE_ID', 'ALBUM_ID', 'SORT_ID', 'PLAYLIST_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('song_id', 'song_name', 'song_year', 'song_duration', 'user_id', 'artiste_id', 'album_id', 'sort_id', 'playlist_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SongPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('SongId' => 0, 'SongName' => 1, 'SongYear' => 2, 'SongDuration' => 3, 'UserId' => 4, 'ArtisteId' => 5, 'AlbumId' => 6, 'SortId' => 7, 'PlaylistId' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('songId' => 0, 'songName' => 1, 'songYear' => 2, 'songDuration' => 3, 'userId' => 4, 'artisteId' => 5, 'albumId' => 6, 'sortId' => 7, 'playlistId' => 8, ),
        BasePeer::TYPE_COLNAME => array (SongPeer::SONG_ID => 0, SongPeer::SONG_NAME => 1, SongPeer::SONG_YEAR => 2, SongPeer::SONG_DURATION => 3, SongPeer::USER_ID => 4, SongPeer::ARTISTE_ID => 5, SongPeer::ALBUM_ID => 6, SongPeer::SORT_ID => 7, SongPeer::PLAYLIST_ID => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SONG_ID' => 0, 'SONG_NAME' => 1, 'SONG_YEAR' => 2, 'SONG_DURATION' => 3, 'USER_ID' => 4, 'ARTISTE_ID' => 5, 'ALBUM_ID' => 6, 'SORT_ID' => 7, 'PLAYLIST_ID' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('song_id' => 0, 'song_name' => 1, 'song_year' => 2, 'song_duration' => 3, 'user_id' => 4, 'artiste_id' => 5, 'album_id' => 6, 'sort_id' => 7, 'playlist_id' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = SongPeer::getFieldNames($toType);
        $key = isset(SongPeer::$fieldKeys[$fromType][$name]) ? SongPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SongPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, SongPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SongPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. SongPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SongPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SongPeer::SONG_ID);
            $criteria->addSelectColumn(SongPeer::SONG_NAME);
            $criteria->addSelectColumn(SongPeer::SONG_YEAR);
            $criteria->addSelectColumn(SongPeer::SONG_DURATION);
            $criteria->addSelectColumn(SongPeer::USER_ID);
            $criteria->addSelectColumn(SongPeer::ARTISTE_ID);
            $criteria->addSelectColumn(SongPeer::ALBUM_ID);
            $criteria->addSelectColumn(SongPeer::SORT_ID);
            $criteria->addSelectColumn(SongPeer::PLAYLIST_ID);
        } else {
            $criteria->addSelectColumn($alias . '.song_id');
            $criteria->addSelectColumn($alias . '.song_name');
            $criteria->addSelectColumn($alias . '.song_year');
            $criteria->addSelectColumn($alias . '.song_duration');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.artiste_id');
            $criteria->addSelectColumn($alias . '.album_id');
            $criteria->addSelectColumn($alias . '.sort_id');
            $criteria->addSelectColumn($alias . '.playlist_id');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SongPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Song
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SongPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return SongPeer::populateObjects(SongPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SongPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Song $obj A Song object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSongId();
            } // if key === null
            SongPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Song object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Song) {
                $key = (string) $value->getSongId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Song object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SongPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Song Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SongPeer::$instances[$key])) {
                return SongPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (SongPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        SongPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to song
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = SongPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SongPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SongPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Song object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SongPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SongPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SongPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SongPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SongPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Artiste table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinArtiste(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Album table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAlbum(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sort table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSort(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Playlist table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPlaylist(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Song objects pre-filled with their User objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol = SongPeer::NUM_HYDRATE_COLUMNS;
        UserPeer::addSelectColumns($criteria);

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Song) to $obj2 (User)
                $obj2->addSong($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with their Artiste objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinArtiste(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol = SongPeer::NUM_HYDRATE_COLUMNS;
        ArtistePeer::addSelectColumns($criteria);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ArtistePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ArtistePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ArtistePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ArtistePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Song) to $obj2 (Artiste)
                $obj2->addSong($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with their Album objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlbum(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol = SongPeer::NUM_HYDRATE_COLUMNS;
        AlbumPeer::addSelectColumns($criteria);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AlbumPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AlbumPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AlbumPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AlbumPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Song) to $obj2 (Album)
                $obj2->addSong($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with their Sort objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSort(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol = SongPeer::NUM_HYDRATE_COLUMNS;
        SortPeer::addSelectColumns($criteria);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SortPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SortPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SortPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SortPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Song) to $obj2 (Sort)
                $obj2->addSong($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with their Playlist objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPlaylist(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol = SongPeer::NUM_HYDRATE_COLUMNS;
        PlaylistPeer::addSelectColumns($criteria);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PlaylistPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PlaylistPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PlaylistPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Song) to $obj2 (Playlist)
                $obj2->addSong($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Song objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol2 = SongPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        ArtistePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArtistePeer::NUM_HYDRATE_COLUMNS;

        AlbumPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + AlbumPeer::NUM_HYDRATE_COLUMNS;

        SortPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SortPeer::NUM_HYDRATE_COLUMNS;

        PlaylistPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PlaylistPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined User rows

            $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = UserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Song) to the collection in $obj2 (User)
                $obj2->addSong($obj1);
            } // if joined row not null

            // Add objects for joined Artiste rows

            $key3 = ArtistePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ArtistePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ArtistePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArtistePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Song) to the collection in $obj3 (Artiste)
                $obj3->addSong($obj1);
            } // if joined row not null

            // Add objects for joined Album rows

            $key4 = AlbumPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = AlbumPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = AlbumPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    AlbumPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Song) to the collection in $obj4 (Album)
                $obj4->addSong($obj1);
            } // if joined row not null

            // Add objects for joined Sort rows

            $key5 = SortPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = SortPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = SortPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SortPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Song) to the collection in $obj5 (Sort)
                $obj5->addSong($obj1);
            } // if joined row not null

            // Add objects for joined Playlist rows

            $key6 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = PlaylistPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = PlaylistPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PlaylistPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Song) to the collection in $obj6 (Playlist)
                $obj6->addSong($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related User table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Artiste table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptArtiste(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Album table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAlbum(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sort table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSort(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Playlist table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPlaylist(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SongPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SongPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Song objects pre-filled with all related objects except User.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol2 = SongPeer::NUM_HYDRATE_COLUMNS;

        ArtistePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArtistePeer::NUM_HYDRATE_COLUMNS;

        AlbumPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlbumPeer::NUM_HYDRATE_COLUMNS;

        SortPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SortPeer::NUM_HYDRATE_COLUMNS;

        PlaylistPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PlaylistPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Artiste rows

                $key2 = ArtistePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArtistePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArtistePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArtistePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Song) to the collection in $obj2 (Artiste)
                $obj2->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Album rows

                $key3 = AlbumPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlbumPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlbumPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlbumPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Song) to the collection in $obj3 (Album)
                $obj3->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Sort rows

                $key4 = SortPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SortPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SortPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SortPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Song) to the collection in $obj4 (Sort)
                $obj4->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Playlist rows

                $key5 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PlaylistPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PlaylistPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PlaylistPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Song) to the collection in $obj5 (Playlist)
                $obj5->addSong($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with all related objects except Artiste.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptArtiste(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol2 = SongPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        AlbumPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlbumPeer::NUM_HYDRATE_COLUMNS;

        SortPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SortPeer::NUM_HYDRATE_COLUMNS;

        PlaylistPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PlaylistPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Song) to the collection in $obj2 (User)
                $obj2->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Album rows

                $key3 = AlbumPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlbumPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlbumPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlbumPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Song) to the collection in $obj3 (Album)
                $obj3->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Sort rows

                $key4 = SortPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SortPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SortPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SortPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Song) to the collection in $obj4 (Sort)
                $obj4->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Playlist rows

                $key5 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PlaylistPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PlaylistPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PlaylistPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Song) to the collection in $obj5 (Playlist)
                $obj5->addSong($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with all related objects except Album.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAlbum(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol2 = SongPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        ArtistePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArtistePeer::NUM_HYDRATE_COLUMNS;

        SortPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SortPeer::NUM_HYDRATE_COLUMNS;

        PlaylistPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PlaylistPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Song) to the collection in $obj2 (User)
                $obj2->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Artiste rows

                $key3 = ArtistePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ArtistePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ArtistePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArtistePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Song) to the collection in $obj3 (Artiste)
                $obj3->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Sort rows

                $key4 = SortPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SortPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SortPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SortPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Song) to the collection in $obj4 (Sort)
                $obj4->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Playlist rows

                $key5 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PlaylistPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PlaylistPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PlaylistPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Song) to the collection in $obj5 (Playlist)
                $obj5->addSong($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with all related objects except Sort.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSort(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol2 = SongPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        ArtistePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArtistePeer::NUM_HYDRATE_COLUMNS;

        AlbumPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + AlbumPeer::NUM_HYDRATE_COLUMNS;

        PlaylistPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PlaylistPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::PLAYLIST_ID, PlaylistPeer::PLAYLIST_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Song) to the collection in $obj2 (User)
                $obj2->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Artiste rows

                $key3 = ArtistePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ArtistePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ArtistePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArtistePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Song) to the collection in $obj3 (Artiste)
                $obj3->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Album rows

                $key4 = AlbumPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = AlbumPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = AlbumPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    AlbumPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Song) to the collection in $obj4 (Album)
                $obj4->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Playlist rows

                $key5 = PlaylistPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = PlaylistPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = PlaylistPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PlaylistPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Song) to the collection in $obj5 (Playlist)
                $obj5->addSong($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Song objects pre-filled with all related objects except Playlist.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Song objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPlaylist(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SongPeer::DATABASE_NAME);
        }

        SongPeer::addSelectColumns($criteria);
        $startcol2 = SongPeer::NUM_HYDRATE_COLUMNS;

        UserPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UserPeer::NUM_HYDRATE_COLUMNS;

        ArtistePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArtistePeer::NUM_HYDRATE_COLUMNS;

        AlbumPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + AlbumPeer::NUM_HYDRATE_COLUMNS;

        SortPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SortPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SongPeer::USER_ID, UserPeer::USER_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ARTISTE_ID, ArtistePeer::ARTISTE_ID, $join_behavior);

        $criteria->addJoin(SongPeer::ALBUM_ID, AlbumPeer::ALBUM_ID, $join_behavior);

        $criteria->addJoin(SongPeer::SORT_ID, SortPeer::SORT_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SongPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SongPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SongPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SongPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined User rows

                $key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UserPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UserPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Song) to the collection in $obj2 (User)
                $obj2->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Artiste rows

                $key3 = ArtistePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ArtistePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ArtistePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArtistePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Song) to the collection in $obj3 (Artiste)
                $obj3->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Album rows

                $key4 = AlbumPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = AlbumPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = AlbumPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    AlbumPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Song) to the collection in $obj4 (Album)
                $obj4->addSong($obj1);

            } // if joined row is not null

                // Add objects for joined Sort rows

                $key5 = SortPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SortPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SortPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SortPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Song) to the collection in $obj5 (Sort)
                $obj5->addSong($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(SongPeer::DATABASE_NAME)->getTable(SongPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSongPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSongPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new SongTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return SongPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Song or Criteria object.
     *
     * @param      mixed $values Criteria or Song object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Song object
        }

        if ($criteria->containsKey(SongPeer::SONG_ID) && $criteria->keyContainsValue(SongPeer::SONG_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SongPeer::SONG_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Song or Criteria object.
     *
     * @param      mixed $values Criteria or Song object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SongPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SongPeer::SONG_ID);
            $value = $criteria->remove(SongPeer::SONG_ID);
            if ($value) {
                $selectCriteria->add(SongPeer::SONG_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SongPeer::TABLE_NAME);
            }

        } else { // $values is Song object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the song table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SongPeer::TABLE_NAME, $con, SongPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SongPeer::clearInstancePool();
            SongPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Song or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Song object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SongPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Song) { // it's a model object
            // invalidate the cache for this single object
            SongPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SongPeer::DATABASE_NAME);
            $criteria->add(SongPeer::SONG_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SongPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SongPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SongPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Song object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Song $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SongPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SongPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(SongPeer::DATABASE_NAME, SongPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Song
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SongPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SongPeer::DATABASE_NAME);
        $criteria->add(SongPeer::SONG_ID, $pk);

        $v = SongPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Song[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SongPeer::DATABASE_NAME);
            $criteria->add(SongPeer::SONG_ID, $pks, Criteria::IN);
            $objs = SongPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSongPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSongPeer::buildTableMap();

