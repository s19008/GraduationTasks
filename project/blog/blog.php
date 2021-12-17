<?php
require_once('./dbc.php');
ini_set('display_errors', "On");
class Blog extends Dbc
{

    protected $table_name = 'blog';
    // 3.カテゴリー名を表示
    // 引数:数字
    // 返り値:カテゴリーの文字列
    public function setCategoryName($category)
    {
        if ($category === '1') {
            return 'サッカー';
        } elseif ($category === '2') {
            return 'ボウリング';
        } elseif ($category === '3') {
            return '野球';
        } elseif ($category === '4') {
            return 'テニス';
        } elseif ($category === '5') {
            return 'ゲーム';
        } elseif ($category === '6') {
            return 'カラオケ';
        } else {
            return 'その他';
        }
    }

    public function setageName($age)
    {
        if ($age === '1') {
            return '10代';
        } elseif ($age === '2') {
            return '20代';
        } elseif ($age === '3') {
            return '30代';
        } elseif ($age === '4') {
            return '40代';
        } elseif ($age === '5') {
            return '50代';
        } elseif ($age === '6') {
            return '60代以上';
        }
    }

    public function blogCreate($blogs)
    {
        $sql = "INSERT INTO 
            $this->table_name(title, content, category, age) 
        VALUES 
            (:title, :content, :category, :age)";

        $dbh = $this->dbConnect();
        $dbh->beginTransaction();
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
            $stmt->bindValue(':content', $blogs['content'], PDO::PARAM_STR);
            $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
            $stmt->bindValue(':age', $blogs['age'], PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            echo '<h2 class="create-text">ブログを投稿しました!</h2>';
        } catch (\PDOException $e) {
            $dbh->rollBack();
            exit($e);
        }
    }

    public function blogUpdate($blogs)
    {
        $sql = "UPDATE $this->table_name SET 
                    title = :title, content = :content, category = :category, age = :age;
                WHERE
                    id =:id";

        $dbh = $this->dbConnect();
        $dbh->beginTransaction();
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
            $stmt->bindValue(':content', $blogs['content'], PDO::PARAM_STR);
            $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
            $stmt->bindValue(':id', $blogs['id'], PDO::PARAM_INT);
            $stmt->bindValue(':age', $blogs['age'], PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            echo 'ブログを更新しました！';
        } catch (\PDOException $e) {
            $dbh->rollBack();
            exit($e);
        }
    }

    // ブログのバリデーション
    public function blogValidate($blogs)
    {
        if (empty($blogs['title'])) {
            exit('タイトルを入力してください');
        }

        if (mb_strlen($blogs['title']) > 191) {
            exit('191文字以内にしてください');
        }

        if (empty($blogs['content'])) {
            exit('本文を入力してください');
        }

        if (empty($blogs['category'])) {
            exit('カテゴリーは必須です');
        }

        if (empty($blogs['age'])) {
            exit('年代を入力してください');
        }
    }
}
