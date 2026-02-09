<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{

    use HasFactory;
    protected $table = 'job_listings';

    // protected $guarded = [];
    protected $fillable = ['employer_id','title', 'salary']; //colunas que podem receber dados de fora (por protecao)

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        // Relacionamento com tags
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
    
}





















































/*public static function find(int $id): array{

        $job = arr::first(static::all(), fn($job) => $job['id'] == $id); 

        if (! $job){
            abort(404);
        }
        
        return $job;


    }*/






