<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Station;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
 
class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'latetime',
        'station_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
    
    public function getSearchResult(): SearchResult
    {
        // A.検索結果のリンク先となるルートを入れる
       $url = route('review.show', $this->id);
    
        return new SearchResult(
           $this,
        //    B.検索結果で表示したいカラムを入れる
           $this->body,
           $url
        );
    }
}
