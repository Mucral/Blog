<?php

namespace OpenClassRoom\Blog\Model;
require_once('Manager.php');

class ReportManager extends Manager
{
    public function formReport($idComment)
    {
        $db = $this->dbConnect();
        $reports = $db->prepare('SELECT * FROM comment WHERE report_comment = true, comment_id = ?');
        $reports->execute(array($idComment));

        return $reports;
    }

    public function addReport($idPost, $idComment, $author_report, $text_report)
    {
        $db = $this->dbConnect();
        $reports = $db->prepare('INSERT INTO report(post_id, comment_id, author_report, text_report, date_report) VALUES(?, ?, ?, ?, NOW())');
        $reports->execute(array($idPost, $idComment, $author_report, $text_report));
        header('Location: ?action=post&post=' . $_GET['post']);

        return $reports;
    }
}