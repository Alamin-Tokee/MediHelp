<?php require 'db.php'; ?>

<?php 


class Post{

	

//CREATE POST
	
	public function insertPost($title,$content){

		global $pdo;

		$stmt = $pdo->prepare('INSERT INTO user_post (title,content) VALUES (?,?)');

		$stmt->execute([

			$title,
			$content

		]);

		return $pdo->lastInsertId();
	}






	public function insertUserPost($user_id,$title,$content){

		global $pdo;

		$stmt = $pdo->prepare('INSERT INTO user_post (user_id,title,content) VALUES (?,?,?)');

		$stmt->execute([

			$user_id,
			$title,
			$content

		]);

		return $pdo->lastInsertId();
	}

//READ POST


	public function readAllPost($fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM user_post ORDER BY post_id DESC');
		$stmt->execute();

		return $stmt->fetchAll($fetchType);

	}

	public function readPostById($post_id, $fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM user_post WHERE post_id=?');
		
		$stmt->execute([$post_id]);

		return $stmt->fetch($fetchType);

	}


//UPDATE POST


	public function updatePost($post_id,$title,$content){

		global $pdo;

		$stmt = $pdo->prepare('UPDATE user_post SET title=?, content=? WHERE post_id=?');

		$stmt->execute([

			$title,
			$content,
			$post_id

		]);


	}



//DELETE POST


	public function deletePost($post_id){

		global $pdo;

		$stmt = $pdo->prepare("DELETE FROM user_post WHERE post_id=?");

		$stmt->execute([$post_id]);
	}

}

class User{

//CREATE USER
	
	public function insertUser($email,$fastname,$lastname,$password,$r_password){

		global $pdo;

		$stmt = $pdo->prepare('INSERT INTO users (email,user_f_name,user_l_name,password,r_password) VALUES (?,?,?,?,?)');

		$stmt->execute([

			$email,
			$fastname,
			$lastname,
			$password,
			$r_password
		]);

		return $pdo->lastInsertId();
	}

	public function readUserById($email,$fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM users WHERE email=?');
		
		$stmt->execute([
			$email
		]);

		return $stmt->fetch($fetchType);

	}

	public function readPostByMe($user_id, $fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM users WHERE user_id=?');
		
		$stmt->execute([$user_id]);

		return $stmt->fetch($fetchType);

	}
	public function readPostByYou($user_id, $fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM users WHERE user_id=?');
		
		$stmt->execute([$user_id]);

		return $stmt->fetchAll($fetchType);

	}


}

class Comment{

   //INSERT USER COMMENT

	public function insertUserComment($post_id,$user_com_id,$content){

		global $pdo;

		$stmt = $pdo->prepare('INSERT INTO comments (post_id,user_com_id,comment) VALUES (?,?,?)');

		$stmt->execute([

			$post_id,
			$user_com_id,
			$content

		]);

		return $pdo->lastInsertId();
	}


	//READ COMMENT

	public function readAllPost($fetchType = PDO::FETCH_OBJ){

		global $pdo;

		$stmt = $pdo->prepare('SELECT * FROM comments ORDER BY com_id DESC');
		$stmt->execute();

		return $stmt->fetchAll($fetchType);

	}

}








?>