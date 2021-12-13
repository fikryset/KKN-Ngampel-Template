<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmisiQna extends Model
{
    //
    protected $table = 'submisi_qna';

    protected $fillable = ['nama', 'nohp', 'pertanyaan'];
}
