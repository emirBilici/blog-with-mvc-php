<?php

class CommentModel extends Model
{

    /**
     * @param stdClass $data
     * @return bool
     */
    public function Create(stdClass $data): bool
    {
        $query = $this->db->prepare('INSERT INTO comments SET comment_Content = :content, comment_User_id = :userID, comment_Post_id = :postID');
        $insert = $query->execute([
            'content' => $data->content,
            'userID' => (int) $data->userID,
            'postID' => (int) $data->postID
        ]);

        if ($insert)
            return true;
        return false;
    }

}