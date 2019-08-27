<?php



Interface IRepository {
    
    function connectDB();

    function selectAll();
    
    function updateById($id);

    function updateAll();

}
