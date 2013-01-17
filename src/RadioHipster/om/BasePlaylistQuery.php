<?php


/**
 * Base class that represents a query for the 'playlist' table.
 *
 *
 *
 * @method PlaylistQuery orderByPlaylistId($order = Criteria::ASC) Order by the playlist_id column
 * @method PlaylistQuery orderByPlaylistOrder($order = Criteria::ASC) Order by the playlist_order column
 * @method PlaylistQuery orderBySongId($order = Criteria::ASC) Order by the song_id column
 *
 * @method PlaylistQuery groupByPlaylistId() Group by the playlist_id column
 * @method PlaylistQuery groupByPlaylistOrder() Group by the playlist_order column
 * @method PlaylistQuery groupBySongId() Group by the song_id column
 *
 * @method PlaylistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PlaylistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PlaylistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PlaylistQuery leftJoinSong($relationAlias = null) Adds a LEFT JOIN clause to the query using the Song relation
 * @method PlaylistQuery rightJoinSong($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Song relation
 * @method PlaylistQuery innerJoinSong($relationAlias = null) Adds a INNER JOIN clause to the query using the Song relation
 *
 * @method Playlist findOne(PropelPDO $con = null) Return the first Playlist matching the query
 * @method Playlist findOneOrCreate(PropelPDO $con = null) Return the first Playlist matching the query, or a new Playlist object populated from the query conditions when no match is found
 *
 * @method Playlist findOneByPlaylistOrder(int $playlist_order) Return the first Playlist filtered by the playlist_order column
 * @method Playlist findOneBySongId(int $song_id) Return the first Playlist filtered by the song_id column
 *
 * @method array findByPlaylistId(int $playlist_id) Return Playlist objects filtered by the playlist_id column
 * @method array findByPlaylistOrder(int $playlist_order) Return Playlist objects filtered by the playlist_order column
 * @method array findBySongId(int $song_id) Return Playlist objects filtered by the song_id column
 *
 * @package    propel.generator.RadioHipster.om
 */
abstract class BasePlaylistQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePlaylistQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'etuwebdev_radiohipster', $modelName = 'Playlist', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PlaylistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PlaylistQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PlaylistQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PlaylistQuery) {
            return $criteria;
        }
        $query = new PlaylistQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Playlist|Playlist[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PlaylistPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Playlist A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPlaylistId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Playlist A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `playlist_id`, `playlist_order`, `song_id` FROM `playlist` WHERE `playlist_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Playlist();
            $obj->hydrate($row);
            PlaylistPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Playlist|Playlist[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Playlist[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PlaylistPeer::PLAYLIST_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PlaylistPeer::PLAYLIST_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the playlist_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaylistId(1234); // WHERE playlist_id = 1234
     * $query->filterByPlaylistId(array(12, 34)); // WHERE playlist_id IN (12, 34)
     * $query->filterByPlaylistId(array('min' => 12)); // WHERE playlist_id >= 12
     * $query->filterByPlaylistId(array('max' => 12)); // WHERE playlist_id <= 12
     * </code>
     *
     * @param     mixed $playlistId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function filterByPlaylistId($playlistId = null, $comparison = null)
    {
        if (is_array($playlistId)) {
            $useMinMax = false;
            if (isset($playlistId['min'])) {
                $this->addUsingAlias(PlaylistPeer::PLAYLIST_ID, $playlistId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($playlistId['max'])) {
                $this->addUsingAlias(PlaylistPeer::PLAYLIST_ID, $playlistId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlaylistPeer::PLAYLIST_ID, $playlistId, $comparison);
    }

    /**
     * Filter the query on the playlist_order column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaylistOrder(1234); // WHERE playlist_order = 1234
     * $query->filterByPlaylistOrder(array(12, 34)); // WHERE playlist_order IN (12, 34)
     * $query->filterByPlaylistOrder(array('min' => 12)); // WHERE playlist_order >= 12
     * $query->filterByPlaylistOrder(array('max' => 12)); // WHERE playlist_order <= 12
     * </code>
     *
     * @param     mixed $playlistOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function filterByPlaylistOrder($playlistOrder = null, $comparison = null)
    {
        if (is_array($playlistOrder)) {
            $useMinMax = false;
            if (isset($playlistOrder['min'])) {
                $this->addUsingAlias(PlaylistPeer::PLAYLIST_ORDER, $playlistOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($playlistOrder['max'])) {
                $this->addUsingAlias(PlaylistPeer::PLAYLIST_ORDER, $playlistOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlaylistPeer::PLAYLIST_ORDER, $playlistOrder, $comparison);
    }

    /**
     * Filter the query on the song_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySongId(1234); // WHERE song_id = 1234
     * $query->filterBySongId(array(12, 34)); // WHERE song_id IN (12, 34)
     * $query->filterBySongId(array('min' => 12)); // WHERE song_id >= 12
     * $query->filterBySongId(array('max' => 12)); // WHERE song_id <= 12
     * </code>
     *
     * @see       filterBySong()
     *
     * @param     mixed $songId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function filterBySongId($songId = null, $comparison = null)
    {
        if (is_array($songId)) {
            $useMinMax = false;
            if (isset($songId['min'])) {
                $this->addUsingAlias(PlaylistPeer::SONG_ID, $songId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($songId['max'])) {
                $this->addUsingAlias(PlaylistPeer::SONG_ID, $songId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlaylistPeer::SONG_ID, $songId, $comparison);
    }

    /**
     * Filter the query by a related Song object
     *
     * @param   Song|PropelObjectCollection $song The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlaylistQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySong($song, $comparison = null)
    {
        if ($song instanceof Song) {
            return $this
                ->addUsingAlias(PlaylistPeer::SONG_ID, $song->getSongId(), $comparison);
        } elseif ($song instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlaylistPeer::SONG_ID, $song->toKeyValue('PrimaryKey', 'SongId'), $comparison);
        } else {
            throw new PropelException('filterBySong() only accepts arguments of type Song or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Song relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function joinSong($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Song');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Song');
        }

        return $this;
    }

    /**
     * Use the Song relation Song object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SongQuery A secondary query class using the current class as primary query
     */
    public function useSongQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSong($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Song', 'SongQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Playlist $playlist Object to remove from the list of results
     *
     * @return PlaylistQuery The current query, for fluid interface
     */
    public function prune($playlist = null)
    {
        if ($playlist) {
            $this->addUsingAlias(PlaylistPeer::PLAYLIST_ID, $playlist->getPlaylistId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}