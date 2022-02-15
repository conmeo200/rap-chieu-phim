<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $table="ve";

    /**
     * Get all of the comments for the Ve
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function User()
    {
        return $this->hasMany(User::class, 'ID_CTM', 'ID');
    }
    public function Phim()
    {
        return $this->hasMany(Phim::class, 'ID_PHIM', 'ID');
    }
    public function Type_Ve()
    {
        return $this->hasMany(Type_Ve::class, 'ID_Loai', 'ID');
    }
    public function Payment()
    {
        return $this->beLongsTo(Payment::class, 'ID_Ve', 'ID');
    }
    public function getType_Ve($type,$id)
    {
        $data1=Phim::join('ql_phim_xc','ql_phim_xc.ID_PHIM','=','Phim.ID')
                ->join('XuatChieu','XuatChieu.ID','=','ql_phim_xc.ID_XC')
                ->where(['ql_phim_xc.ID_PHIM'=>$type,'ql_phim_xc.ID_XC'=> $id])
                ->select('XuatChieu.TG','ql_phim_xc.SoPhong')
                ->get();
        return $data1;
    }
}
