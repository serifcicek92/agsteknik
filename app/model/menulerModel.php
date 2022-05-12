<?php
class Menuler extends Model
{

    public int $ID;
    public string $ADI;
    public string $ACIKLAMA;
    public string $RESIMYOLU;
    public int $VISIBLEORDER;
    public int $USTID;
    public int $EKLEYENID;
    public DateTime $EKLEMEZAMANI;
    public int $GUNCELLEYENID;
    public DateTime $GUNCELLEMEZAMANI;


    public function getMenuler($id = null)
    {
        try {
             $status = $this->db->prepare("call sel_menuler(:id)");
             $status->bindValue(":id",$id);
             $status->execute();
             $result =  $status->fetchAll(PDO::FETCH_ASSOC);
             return $result;
        } catch (PDOException $th) {
            print_r($th->errorInfo);
            echo "error";
        }
    }

    public function createMenuItems()
    {
        $menulerList = $this->getMenuler(null);
        //print_r($menulerList);
        //echo '<br>';
        // $ustler = array_map(function($val){return $val["ID"].'burası herbirine eklencek';},$menulerList);
        // print_r($ustler);

        //$ustler = array_filter($menulerList,function($val){if ($val["USTID"]==0) {return $val;}});

        //$found = array_search(2,array_column($menulerList,'USTID',false));

        //print_r(array_search('3',array_column($menulerList,'USTID')));

        // $ustId = 2;
        // print_r(array_filter($menulerList,function($menu) use($ustId){
        //     return $menu["USTID"] == $ustId;
        // }));

        $retval = "";
        foreach ($menulerList as $menu) {

            $menuId = $menu["ID"];
            $hasChildren = array_filter($menulerList, function ($val) use ($menuId) {
                if ($val["USTID"] == $menuId) {
                    return $val;
                }
            });
            if ($hasChildren) {
                $subItems = "";
                foreach ($hasChildren as $key) {
                    $subItems .= '<a class="dropdown-item " href="' . $key["link"] . '">' .
                        $key["ADI"] .
                        '</a>';
                }
                $retval .= '
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="' . $menu["link"] . '" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ' . $menu["ADI"] . '
                            </a>
                            <div class="dropdown-menu" aria-labelledby="elektriksantralleri">'
                    . $subItems .
                    '</div>
                        </li>';
            } else if (!$hasChildren && $menu["USTID"] == 0) {
                $retval .= "
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href=\"" . $menu["link"] . "\">" .
                    $menu["ADI"]
                    . "</a>
                        </li>
                        ";
            }
        }
        return $retval;
    }
}
