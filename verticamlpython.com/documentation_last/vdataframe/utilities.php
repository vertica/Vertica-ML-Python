<!DOCTYPE html>
<html>
    <?php include('../../include/head.php'); ?>
    <body>
      <div><?php include('../../include/header.php'); ?></div>
      <div id="content">
        <h2>Serialization</h2>
        <table class="functions_description">
          <tr> <th>Method</th> <th>Definition</th> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/to_csv/index.php">to_csv</td> <td>Creates a CSV file of the current vDataFrame relation.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/to_db/index.php">to_db</td> <td>Saves the vDataFrame current relation to the Vertica database.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/to_json/index.php">to_json</td> <td>Creates a JSON file of the current vDataFrame relation.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/to_pandas/index.php">to_pandas</td> <td>Converts the vDataFrame to a pandas DataFrame.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/to_vdf/index.php">to_vdf</td> <td>Saves the vDataFrame to a .vdf text file.</td> </tr>
        </table>
        <h2>vDataFrame Management</h2>
        <table class="functions_description">
          <tr> <th>Method</th> <th>Definition</th> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/dsn_restart/index.php">dsn_restart</td> <td>Creates a new cursor based on the DSN used to build the vDataFrame.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/load/index.php">load</td> <td>Loads a previous structure of the vDataFrame.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/save/index.php">save</td> <td>Saves the current structure of the vDataFrame.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/set_cursor/index.php">set_cursor</td> <td>Sets a new DB cursor. Very usefull if the connection to the DB is lost.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/set_dsn/index.php">set_dsn</td> <td>Sets a new DSN. This DSN can be used to restart a DB connection.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/set_schema_writing/index.php">set_schema_writing</td> <td>Sets a new writing schema, this schema will be used to create temporary table if it is necessary.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/sql_on_off/index.php">sql_on_off</td> <td>Displays each query generated by the vDataFrame.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/time_on_off/index.php">time_on_off</td> <td>Displays the time took by each query.</td> </tr>
        </table>
        <h2>vDataFrame Information</h2>
        <table class="functions_description">
          <tr> <td>vDataFrame.<a href="main-methods/catcol/index.php">catcol</td> <td>Returns the vDataFrame categorical vcolumns based on a cardinality threshold.</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/category/index.php">category</td> <td>Returns the vcolumn category.</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/ctype/index.php">ctype</td> <td>Returns the vcolumn DB type.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/current_relation/index.php">current_relation</td> <td>Returns the current vDataFrame relation.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/datecol/index.php">datecol</td> <td>Returns all the vDataFrame vcolumns of type date.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/dtypes/index.php">dtypes</td> <td>Returns the different vcolumns types.</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/dtype/index.php">dtype</td> <td>Displays and Returns the vcolumn Data type.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/empty/index.php">empty</td> <td>Returns True if the vDataFrame is empty.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/expected_store_usage/index.php">expected_store_usage</td> <td>Returns the vDataFrame expected store usage.</td> </tr> 
          <tr> <td>vDataFrame.<a href="main-methods/explain/index.php">explain</td> <td>Provides information on how Vertica is computing the current vDataFrame relation.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/get_columns/index.php">get_columns</td> <td>Returns the vDataFrame vcolumns.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/head/index.php">head</td> <td>Returns the vDataFrame head.</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/head/index.php">head</td> <td>Returns the vcolumn head.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/info/index.php">info</td> <td>Displays information about the different vDataFrame transformations.</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/isdate/index.php">isdate</td> <td>Returns True if the vcolumn category is date, False otherwise.</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/isnum/index.php">isnum</td> <td>Returns True if the vcolumn is numerical, False otherwise.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/memory_usage/index.php">memory_usage</td> <td>Returns the vDataFrame memory usage.</td> </tr>  
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/memory_usage/index.php">memory_usage</td> <td>Returns the vcolumn memory usage.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/numcol/index.php">numcol</td> <td>Returns the vDataFrame numerical vcolumns.</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/tail/index.php">tail</td> <td>Returns a part of the vDataFrame tail (delimited by an offset and a limit).</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/tail/index.php">tail</td> <td>Returns a part of the vcolumn tail (delimited by an offset and a limit).</td> </tr>
          <tr> <td>vDataFrame[].<a href="vcolumn-methods/store_usage/index.php">store_usage</td> <td>Returns the vcolumn expected store usage (unit: b).</td> </tr>
          <tr> <td>vDataFrame.<a href="main-methods/version/index.php">version</td> <td>Returns the Vertica Version.</td> </tr>
        </table>
      <div><?php include('../../include/footer.php'); ?></div>
      </div>
    </body>
</html>
