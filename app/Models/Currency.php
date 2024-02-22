<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;
    protected $table = 'currency';
    protected $fillable = ['status'];

    private string $name;
    private string $alphabeticCode;
    private int $numericCode;
    private string $country;
    private int $status;

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

}
