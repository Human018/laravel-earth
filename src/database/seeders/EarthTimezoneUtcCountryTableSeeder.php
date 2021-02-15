<?php

namespace Human018\LaravelEarth\database\seeders;

use Human018\LaravelEarth\Models\Country;
use Human018\LaravelEarth\Models\TimezoneUTC;
use Illuminate\Database\Seeder;

class EarthTimezoneUtcCountryTableSeeder extends Seeder
{

    public string $countryTimezones = '{"3":["um"],"4":["nu"],"5":["as"],"7":["us"],"8":["us"],"9":["ck"],"10":["pf"],"11":["us"],"12":["us"],"13":["us"],"14":["us"],"15":["us"],"16":["us"],"17":["us"],"18":["us"],"19":["mx"],"20":["ca"],"21":["ca"],"28":["ca"],"29":["ca"],"30":["mx"],"31":["us"],"33":["mx"],"34":["mx"],"35":["us"],"36":["ca"],"37":["us"],"38":["ca"],"39":["ca"],"40":["mx"],"41":["ca"],"43":["bz"],"44":["cr"],"45":["bo","sv"],"46":["gt"],"47":["ni"],"48":["hn","bo"],"50":["ec"],"51":["us"],"52":["us"],"53":["us"],"54":["mx"],"55":["us"],"56":["us"],"57":["us"],"58":["us"],"59":["ca"],"60":["ca"],"61":["ca"],"62":["ca"],"64":["mx"],"65":["mx"],"66":["mx"],"67":["mx"],"68":["mx"],"69":["ca"],"70":["ca"],"71":["co","ar","ao","br"],"72":["ky"],"73":["ca"],"74":["br"],"75":["ec","cl","co"],"76":["jm","gg"],"77":["pe","sv","br"],"78":["pa","hn"],"79":["br"],"81":["us"],"82":["cu"],"83":["us"],"84":["us"],"85":["us"],"86":["ca"],"87":["us"],"88":["us"],"89":["ca"],"90":["bs"],"91":["us"],"92":["ca"],"93":["ca"],"94":["ht","cm"],"95":["ca"],"96":["ca"],"98":["us"],"99":["us"],"100":["us"],"101":["ve","co","br"],"102":["py","bw","ar"],"103":["ca"],"104":["ca"],"105":["ca"],"106":["ca"],"107":["gl"],"108":["us"],"109":["br"],"110":["br"],"111":["ai"],"112":["bb"],"113":["aw"],"114":["bb"],"115":["ca"],"116":["br"],"117":["cw"],"118":["bb"],"119":["tc"],"120":["bb"],"121":["fr"],"122":["gy"],"123":["bq"],"124":["bo","ar"],"125":["sx"],"126":["br"],"127":["mf"],"128":["fr"],"129":["ms","bb"],"130":["tt"],"131":["br"],"132":["pr","ar"],"133":["ar"],"134":["bl"],"135":["kn"],"136":["lc"],"137":["um"],"138":["bb"],"139":["io"],"141":["cl"],"142":["us"],"143":["ca"],"144":["br"],"145":["ar"],"146":["ar"],"147":["ar"],"148":["ar"],"149":["ar"],"150":["ar"],"151":["ar"],"157":["br"],"158":["br"],"159":["fr"],"160":["br"],"161":["br"],"162":["sr"],"163":["br"],"164":["br"],"168":["dk"],"169":["ar","uy","cr","us"],"170":["br"],"176":["cv"],"178":["ma"],"185":["gb"],"192":["pt"],"194":["pt"],"195":["ci"],"196":["gh","bw","ky"],"197":["ml"],"198":["ky","gm"],"199":["gw"],"200":["gn"],"201":["sn"],"202":["bw"],"203":["tg","cg","ci"],"204":["lr","us"],"205":["mr","dz"],"206":["cm"],"209":["sh"],"210":["no"],"211":["nl"],"212":["ad"],"213":["de"],"216":["lu"],"217":["mt"],"219":["no"],"220":["it"],"221":["sm"],"222":["se"],"223":["li"],"225":["at"],"226":["ch"],"229":["hu"],"230":["si"],"231":["me"],"232":["cz"],"233":["al"],"234":["es"],"235":["be"],"237":["es","ar","pt"],"238":["fr","cm"],"240":["mk"],"241":["pl"],"243":["dz"],"244":["cf"],"245":["cg"],"246":["cm"],"247":["cd"],"248":["ng","bj"],"249":["ga"],"250":["ao"],"251":["gq"],"252":["td"],"253":["ne"],"254":["bj","cm"],"255":["tn"],"257":["na"],"258":["cy"],"260":["ro","md"],"261":["md"],"262":["lb"],"263":["eg"],"264":["sy"],"269":["fi"],"270":["ua"],"273":["lv"],"274":["bg","us"],"278":["ua"],"280":["bi"],"281":["bw"],"282":["zw"],"283":["za"],"284":["rw"],"285":["cd"],"286":["zm","gh","bw","ky"],"287":["mz"],"288":["ls"],"289":["sz"],"300":["tr"],"302":["ly"],"303":["jo"],"304":["iq"],"306":["ye","sa"],"307":["gh"],"308":["kw"],"309":["qa"],"311":["et"],"313":["tz","mw"],"314":["dj"],"315":["ss"],"317":["sd"],"318":["so"],"319":["ke"],"324":["yt"],"326":["ru"],"328":["ru"],"331":["ru"],"333":["ir"],"334":["ae"],"335":["om"],"337":["az"],"339":["mu"],"340":["fr"],"341":["ge"],"342":["am"],"343":["af"],"345":["kz"],"346":["kz"],"347":["tm"],"348":["tj"],"349":["kz"],"350":["uz"],"351":["uz"],"355":["ru"],"356":["pk","in"],"357":["in"],"358":["ky","bw","lk"],"361":["kz"],"363":["kz"],"364":["cn"],"367":["bd"],"368":["bt"],"372":["th","vn"],"373":["mn"],"374":["id"],"375":["kh"],"378":["la"],"381":["ru"],"382":["ru"],"386":["cn"],"388":["bn"],"389":["my"],"390":["my"],"391":["id"],"392":["ph","py"],"396":["au"],"397":["cn"],"398":["mn"],"399":["mn"],"400":["ru"],"401":["tl"],"402":["id"],"403":["jp"],"405":["pw"],"407":["kr"],"408":["au"],"409":["au"],"410":["au"],"411":["au"],"413":["au"],"414":["au"],"418":["pg"],"419":["mp"],"422":["au"],"425":["ru"],"428":["vu"],"429":["sb"],"433":["ru"],"435":["ru"],"437":["nz"],"439":["tv"],"442":["nr"],"443":["ki"],"446":["bw","ky","gh"],"449":["ru"],"455":["to"],"456":["ws"]}';

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('earth_timezone_utc_country')->delete();

        $utcs = json_decode($this->countryTimezones);

        foreach($utcs as $id => $codes) {
            if($tz = TimezoneUTC::find($id)) {
                $countries = [];
                foreach($codes as $code) {
                    if($country = Country::code($code)) {
                        array_push($countries, $country->id);
                    }
                }
                $tz->countries()->sync($countries);
            }
        }
        
    }
}