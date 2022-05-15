<?php

class Comment extends Controller
{

    public function create()
    {
        $data = $this->getContent();

        if ($data->create) {

            $comment = $data->comment;
            $model = $this->model('commentModel');
            $createComment = $model->Create($comment);

            if ($createComment) {
                echo 'Created..';
            } else {
                echo 'error!';
            }

        }

        return false;
    }

}