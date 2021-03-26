<?php

/*- show
- all
- update
- destroy
- store*/

class Message extends Model {

    public function show($id) {
        $req = $this->init()->prepare("SELECT * FROM pokes WHERE id = ?");
        $req->execute([$id]);
        return $req->fetch();
    }

    public function all() {
        $req = $this->init()->prepare("SELECT * FROM pokes");
        $req->execute();
        return $req->fetchAll();
    }

    public function update($id) {

    }

    public function destroy($id) {

    }

    public function store() {
        
    }
    
}