<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\GroupUse;

class GroupController extends ApiController
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:groups',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group = Group::where('name', $request->name)->first();

            if ($group) {
                return $this->ErrorResponse('Group with this name already exists!', null, null);
            }

            $newGroup = new Group();
            $newGroup->name = $request->name;
            $newGroup->save();
            $image = $request->file('image');
            if ($image) {
                $newGroup->addMedia($image)->toMediaCollection('group_images');
            }
            return $this->SuccessResponse('Added Succesfully.', [
                'group' => $newGroup
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }
    public function add_testing_group(){
        try {
            $groups_names = [

                ['name'=> 'Banff',
                'url'=> 'https://cdn.britannica.com/67/102267-050-FCC426F5/Town-Banff-Alberta-Canada.jpg',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Brooks',
                'url'=> 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/23/e2/d8/41/exterior.jpg?w=400&h=300&s=1',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Calgary',
                'url'=> 'https://cdn.britannica.com/60/137760-050-9EFAB73A/Calgary-foreground-Pengrowth-Saddledome-Canada-Alberta.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Edmonton',
                'url'=> 'https://cdn.britannica.com/47/147947-050-E36E2480/North-Saskatchewan-River-Edmonton-Canada-Alberta.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Fort McMurray',
                'url'=> 'https://cdn.britannica.com/04/190004-050-604B81E4/Tar-sands-industry-Fort-McMurray-Canada-Alberta.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Grande Prairie',
                'url'=> 'https://upload.wikimedia.org/wikipedia/commons/6/68/GPSkyline.jpg',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Jasper',
                'url'=> 'https://cdn.britannica.com/88/100588-050-E478B1EA/Maligne-Lake-Jasper-National-Park-Canada-Alberta.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Lake Louise',
                'url'=> 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/01/25/ce/47/moraine-lake.jpg?w=700&h=-1&s=1',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Lethbridge',
                'url'=> 'https://cdn.britannica.com/07/122307-050-9CE51911/Replica-Fort-Whoop-Up-Lethbridge-Canada-Alberta.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Medicine Hat',
                'url'=> 'https://cdn.britannica.com/02/153802-050-B27C50A8/South-Saskatchewan-River-Medicine-Hat-Canada-Alberta.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Red Deer',
                'url'=> 'https://upload.wikimedia.org/wikipedia/commons/b/b6/Red_Deer_-_Aerial_-_downtown_bridges.jpg',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Saint Albert',
                'url'=> 'https://cdn.britannica.com/13/154013-050-0603AA63/St-Albert-Place-home-theatre-library-city.jpg?w=300',
                'state'=> 'Alta',
                ],
                
                ['name'=> 'Barkerville',
                'url' =>'https://cdn.britannica.com/94/153794-050-ECC366D0/Barkerville-St-Saviours-Anglican-Church-Canada-British.jpg?w=400&h=300&c=crop',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Burnaby',
                'url' =>'https://cdn.britannica.com/93/153793-050-7FD92659/Quadrangle-Burnaby-Simon-Fraser-University-Canada-British.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Campbell River',
                'url' =>'https://upload.travelawaits.com/ta/uploads/2021/09/Campbell-River-British-Columbia-800x800.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Chilliwack',
                'url' =>'https://www.theprogress.com/wp-content/uploads/2017/04/58992chilliwackGarrison-CL20090407-10-2-725.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Cranbrook',
                'url' =>'https://www.jennexplores.com/wp-content/uploads/2018/11/JAF_1661.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Dawson Creek',
                'url' =>'https://cdn.britannica.com/55/127155-004-30861C3D/Dawson-Creek-Art-Gallery-BC.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Delta',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/a/ae/Bridge_Street_%26_Delta_Street_-_37542593804.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Esquimalt',
                'url' =>'https://farm3.static.flickr.com/2754/13155007144_903957f4b1_c.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Fort Saint James',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/7/7f/FORT_ST._JAMES_NATIONAL_HISTORIC_SITE_%2C_BRITISH_COLUMBIA.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Hope',
                'url' =>'https://cdn.britannica.com/70/153870-050-5C360D03/Christ-Church-Hope-British-Columbia-Canada.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Kamloops',
                'url' =>'https://cdn.britannica.com/71/1871-050-444EA69E/Kamloops-BC-confluence-Can-rivers-North-and.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Kelowna',
                'url' =>'https://cdn.britannica.com/96/115296-004-2035C1D9/Kelowna-British-Columbia.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Kimberley',
                'url' =>'https://cdn.britannica.com/73/10473-050-4882C75D/area-Kimberley-hills-BC-Sullivan-background-North.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Kitimat',
                'url' =>'https://cdn.britannica.com/14/153914-050-47997016/Kitimat-British-Columbia-Canada.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Langley',
                'url' =>'https://www.ehcanadatravel.com/images/bc/mainland/langley/downtown-langley-bc.jpg',
                'state'=> 'BC',
                ],
                
                
                ['name'=> 'Nanaimo',
                'url' =>'https://cdn.britannica.com/14/43214-004-6309D091/Bastion-Hudsons-Bay-Company-Nanaimo-fort-BC.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Nelson',
                'url' =>'https://www.lillieandcohoe.com/wp-content/uploads/2021/05/nelsonbc-edit.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'New Westminster',
                'url' =>'https://cdn.britannica.com/24/153924-050-F80A4208/Tugboats-barge-Fraser-River-New-Westminster-British.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'North Vancouver',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d8/North_Vancouver_Canada.JPG/1200px-North_Vancouver_Canada.JPG',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Oak Bay',
                'url' =>'https://cdn.britannica.com/27/153927-050-1F283019/Oak-Bay-Vancouver-Island-Canada-British-Columbia.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Penticton',
                'url' =>'https://cdn.britannica.com/97/115697-004-C6A3D853/Penticton-BC.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Powell River',
                'url' =>'https://assets.simpleviewinc.com/simpleview/image/upload/c_limit,h_1200,q_75,w_1200/v1/clients/sunshinecoastcanada/Powell_River_Emma_Levez_Larocque_1440x900_7ca4a743-2355-4e66-9828-c3f12050f5ac.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Prince George',
                'url' =>'https://cdn.britannica.com/89/153889-050-636408E0/Prince-George-British-Columbia-Canada.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Prince Rupert',
                'url' =>'https://cdn.britannica.com/26/153926-050-8C51FD9C/Sunken-Gardens-Kaien-Island-Prince-Rupert-Canada.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Quesnel',
                'url' =>'https://beta.ctvnews.ca/local/british-columbia/2019/11/20/1_4694988/_jcr_content/root/responsivegrid/image.coreimg.png/1574291224591/1-4695007.png',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Revelstoke',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/1/1e/Revelstoke%2C_British_Columbia_-_2013.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Rossland',
                'url' =>'https://powdercanada.com/wp-content/uploads/2009/01/Rossland.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Trail',
                'url' =>'https://mountaintownproperties.ca/wp-content/uploads/2020/01/city-of-trail.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Vancouver',
                'url' =>'https://cdn.britannica.com/56/94456-050-2ECDE7B8/Vancouver-British-Columbia-Canada.jpg?w=300',
                'state'=> 'BC',
                ],
                
                
                ['name'=> 'Vernon',
                'url' =>'https://bpvernonms.wpenginepowered.com/wp-content/uploads/2018/02/10477143_web1_180207-VMS-a-Vernon.jpg',
                'state'=> 'BC',
                ],
                
                ['name'=> 'Victoria',
                'url' =>'https://cdn.britannica.com/76/114776-050-378B4E5B/Provincial-Parliament-Buildings-Victoria-Canada-British-Columbia.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'West Vancouver',
                'url' =>'https://cdn.britannica.com/61/115861-050-48240B50/West-Vancouver-BC.jpg?w=300',
                'state'=> 'BC',
                ],
                
                ['name'=> 'White Rock',
                'url' =>'https://cdn.britannica.com/00/115700-004-A8634BB1/rock-White-Rock-BC.jpg?w=300',
                'state'=> 'BC',['name'=> 'Bathurst',
                ],
                'url' =>'https://cdn.britannica.com/77/153877-050-10B47524/Sacred-Heart-Cathedral-Bathurst-Canada-New-Brunswick.jpg?w=300',
                'state'=> 'NB',
                ],
                
                ['name'=> 'Caraquet',
                'url' =>'https://cdn.britannica.com/63/137763-050-9DCB86CF/fishing-port-Caraquet-New-Brunswick.jpg?w=300',
                'state'=> 'NB',
                ],
                ['name'=> 'Dalhousie',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/b/b6/Inch_Arran_Light.jpg',
                'state'=> 'NB',
                ],
                ['name'=> 'Fredericton',
                'url' =>'https://cdn.britannica.com/81/154481-050-38C998FA/city-hall-Fredericton-Canada-New-Brunswick.jpg?w=300',
                'state'=> 'NB',
                ],
                ['name'=> 'Miramichi',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/c/c8/Miramichi_NB_Ritchie_Wharf_1993.jpg',
                'state'=> 'NB',
                ],
                ['name'=> 'Moncton',
                'url' =>'https://cdn.britannica.com/59/128359-004-1FE9C6B8/Moncton-Petitcodiac-River-New-Brunswick.jpg?w=300',
                'state'=> 'NB',
                ],
                ['name'=> 'Saint John',
                'url' =>'https://cdn.britannica.com/02/115702-050-EEF3D19A/Skyline-St-John-NB.jpg?w=300',
                'state'=> 'NB',
                ],
                ['name'=> 'Argentia',
                'url' =>'https://applyzones.com/uploads/Blog/Student/Canada/Canada%20EN/What-you-should-know-about-Newfoundland-and-Labrador-immigration-policies.jpg',
                'state'=> 'NL',
                ],
                ['name'=> 'Bonavista',
                'url' =>'https://cdn.britannica.com/74/153874-050-47CE025E/Harbour-Bonavista-Newfoundland-Labrador-Canada.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'Channel–Port aux Basques',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/9/9d/Newfoundland_Port_aux_Basques.jpg',
                'state'=> 'NL',
                ],
                ['name'=> 'Corner Brook',
                'url' =>'https://cdn.britannica.com/12/153912-050-65905FED/Corner-Brook-Newfoundland-Labrador-Canada.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'Ferryland',
                'url' =>'https://cdn.britannica.com/32/153932-050-ABD2A081/Ferryland-Head-Lighthouse-Newfoundland-Canada-Labrador.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'Gander',
                'url' =>'https://www.usatoday.com/gcdn/-mm-/9acdfb86e870bd7ce1c664f79864811fbf24d334/c=0-199-2996-1892/local/-/media/2017/09/06/USATODAY/USATODAY/636403078970424979-aerial-gander.jpg',
                'state'=> 'NL',
                ],
                ['name'=> 'Grand Falls–Windsor',
                'url' =>'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/5e/b6/8d/20180620-175216-largejpg.jpg?w=500&h=300&s=1',
                'state'=> 'NL',
                ],
                ['name'=> 'Happy Valley–Goose Bay',
                'url' =>'https://cdn.britannica.com/85/153985-050-663B5770/Royal-Canadian-Air-Force-air-base-Wing.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'Harbour Grace',
                'url' =>'https://cdn.britannica.com/01/154001-050-417E8680/Memorial-Amelia-Earhart-role-airplane-Spirit-of.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'Labrador City',
                'url' =>'https://www.worldatlas.com/r/w1200/upload/e9/13/c9/st-john-s-newfoundland.jpg',
                'state'=> 'NL',
                ],
                ['name'=> 'Placentia',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Carlb-placentia-nfld-2002.jpg/800px-Carlb-placentia-nfld-2002.jpg',
                'state'=> 'NL',
                ],
                ['name'=> 'Saint Anthony',
                'url' =>'https://cdn.britannica.com/05/115705-004-252351D7/Saint-Anthony-Nfld.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'St. John’s',
                'url' =>'https://cdn.britannica.com/80/26580-050-81DB9BCA/harbour-Saint-Johns-Nfld.jpg?w=300',
                'state'=> 'NL',
                ],
                ['name'=> 'Wabana',
                'url' =>'https://media-cdn.tripadvisor.com/media/photo-s/16/e1/1d/35/the-grand-wabana-inn.jpg',
                'state'=> 'NL',
                ],
                ['name'=> 'Fort Smith',
                'url' =>'https://cdn.britannica.com/87/121687-004-3149AA8A/Grosbeak-Lake-Wood-Buffalo-National-Park-Fort.jpg?w=300',
                'state'=> 'NT',
                ],
                ['name'=> 'Hay River',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/The_High_Rise_in_Hay_River_02.jpg/1200px-The_High_Rise_in_Hay_River_02.jpg',
                'state'=> 'NT',
                ],
                ['name'=> 'Inuvik',
                'url' =>'https://cdn.britannica.com/78/215578-050-E21BEDBC/Homes-Inuvik-Northwest-Territories-Canada.jpg?w=300',
                'state'=> 'NT',
                ],
                ['name'=> 'Tuktoyaktuk',
                'url' =>'https://cdn.britannica.com/10/115710-004-AE5AB9F6/Pingos-Tuktoyaktuk-Northwest-Territories-Canada.jpg?w=300',
                'state'=> 'NT',
                ],
                ['name'=> 'Yellowknife',
                'url' =>'https://cdn.britannica.com/84/31284-004-CE12D321/Yellowknife-Northwest-Territories-shore-Great-Slave-Lake-1935.jpg?w=300',
                'state'=> 'NT',
                ],
                ['name'=> 'Baddeck',
                'url' =>'https://cdn.britannica.com/16/153916-050-F21454A3/Museum-visitor-centre-Alexander-Graham-Bell-National.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Digby',
                'url' =>'https://cdn.britannica.com/01/153901-050-CFD51E4A/Boardwalk-Digby-Nova-Scotia-Canada.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Glace Bay',
                'url' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN8eQXIHe2zhyspMsfHYAPPydWUm-KzTxxng&usqp=CAU',
                'state'=> 'NS',
                ],
                ['name'=> 'Halifax',
                'url' =>'https://cdn.britannica.com/57/93657-050-346769BA/Skyline-Halifax-Nova-Scotia.jpg',
                'state'=> 'NS',
                ],
                ['name'=> 'Liverpool',
                'url' =>'https://cdn.britannica.com/97/153897-050-AA32A1A4/Mersey-River-Liverpool-Nova-Scotia-Canada.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Louisbourg',
                'url' =>'https://cdn.britannica.com/26/189926-050-E6B23F56/Louisbourg-Lighthouse-Cape-Breton-Island-Canada-Nova.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Lunenburg',
                'url' =>'https://cdn.britannica.com/59/93659-050-886F66CA/Lunenburg-NS.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Pictou',
                'url' =>'https://cdn.britannica.com/13/115713-050-89A4BF87/view-Pictou-NS.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Port Hawkesbury',
                'url' =>'https://townofporthawkesbury.ca/upload/1421104344--GAL--TOWN.jpg',
                'state'=> 'NS',
                ],
                ['name'=> 'Springhill',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/e/e4/Springhill%2C_NS.JPG',
                'state'=> 'NS',
                ],
                ['name'=> 'Sydney',
                'url' =>'https://cdn.britannica.com/14/115714-050-F4816E59/Sydney-NS.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Yarmouth',
                'url' =>'https://cdn.britannica.com/15/115715-004-51C5BA35/Lighthouse-Yarmouth-NS.jpg?w=300',
                'state'=> 'NS',
                ],
                ['name'=> 'Iqaluit',
                'url' =>'https://cdn.britannica.com/07/115707-004-F843AD62/legislature-Nunavut-Legislative-Assembly-Iqaluit-building.jpg?w=300',
                'state'=> 'NU',
                ],
                
                ['name'=> 'Bancroft',
                'url'=> 'https://cdn.britannica.com/09/153909-050-5EDAE1D8/Bancroft-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Barrie',
                'url'=> 'https://cdn.britannica.com/43/137743-050-66FD10C5/Barrie-Kempenfelt-Bay-Ontario.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Belleville',
                'url'=> 'https://cdn.britannica.com/80/153880-050-B5200B29/City-hall-Belleville-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Brampton',
                'url'=> 'https://cdn.britannica.com/18/155018-050-0DF96B7C/City-hall-Brampton-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Brantford',
                'url'=> 'https://cdn.britannica.com/19/115719-050-45C43B31/City-hall-Brantford-Ontario-canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Brockville',
                'url'=> 'https://cdn.britannica.com/00/142400-050-2B9203C3/Court-House-Brockville-bust-Ont-Isaac-Brock.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Burlington',
                'url'=> 'https://cdn.britannica.com/21/115721-004-F5D526A8/City-hall-Burlington-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Cambridge',
                'url'=> 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Europe-like_Grand_River_scene%2C_Cambridge%2C_Ontario_Cambridge-on-canada-peter-j-restivo-5292017_037.jpg',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Chatham',
                'url'=> 'https://upload.wikimedia.org/wikipedia/commons/6/65/Chatham_ON_1.JPG',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Chatham-Kent',
                'url'=> 'https://cdn.thecrazytourist.com/wp-content/uploads/2019/05/ccimage-shutterstock_787666756.jpg',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Cornwall',
                'url'=> 'https://cdn.britannica.com/03/153903-050-C0241CFE/Cornwall-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Elliot Lake',
                'url'=> 'https://cdn.britannica.com/05/153905-050-51782A51/Elliot-Lake-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Etobicoke',
                'url'=> 'https://cdn.britannica.com/97/142397-050-19EA4761/Etobicoke-part-City-of-Toronto-Ontario.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Fort Erie',
                'url'=> 'https://cdn.britannica.com/79/153879-050-C40E7FD7/fort-Fort-Erie-Canada-Ontario.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Fort Frances',
                'url'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Fort_Frances_ON_2.JPG/1200px-Fort_Frances_ON_2.JPG',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Gananoque',
                'url'=> 'https://cdn.britannica.com/94/137794-050-EC6C276B/Ganonoque-St-Lawrence-River-Ontario.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Guelph',
                'url'=> 'https://cdn.britannica.com/65/153865-050-21A4D10D/City-hall-Guelph-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Hamilton',
                'url'=> 'https://cdn.britannica.com/96/115796-050-3B9D84C6/Hamilton-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Iroquois Falls',
                'url'=> 'https://cdn.britannica.com/23/115723-004-C615BF87/Lumber-mill-Iroquois-Falls-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Kapuskasing',
                'url'=> 'https://cdn.britannica.com/24/115724-004-5F25690E/Kapuskasing-River-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Kawartha Lakes',
                'url'=> 'https://cdn.britannica.com/06/153906-050-7EEA0772/Kawartha-Lakes-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Kenora',
                'url'=> 'https://cdn.britannica.com/76/46876-004-BA576D10/Kenora-Lake-of-the-Woods-Ontario.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Kingston',
                'url'=> 'https://cdn.britannica.com/25/115725-004-2630C8D5/Night-view-Royal-Military-College-of-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Kirkland Lake',
                'url'=> 'https://cdn.britannica.com/26/115726-004-A3901CD9/Miners-Memorial-Kirkland-Lake-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Kitchener',
                'url'=> 'https://cdn.britannica.com/27/115727-004-02D9E03C/Victoria-Park-Kitchener-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Laurentian Hills',
                'url'=> 'https://farm9.staticflickr.com/8332/8100273214_ec4bafc966_b.jpg',
                'state'=> 'ON',
                ],
                
                ['name'=> 'London',
                'url'=> 'https://cdn.britannica.com/28/115728-004-F1336758/One-London-Place-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Midland',
                'url'=> 'https://cdn.britannica.com/14/154014-050-B6A3CDBF/buildings-Sainte-Marie-garden-Hurons-Ontario-Canada-Midland.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Mississauga',
                'url'=> 'https://cdn.britannica.com/29/115729-004-8BBE7310/City-hall-Mississauga-Ont.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Moose Factory',
                'url'=> 'https://cdn.britannica.com/86/153886-050-F328BE5F/building-St-Thomas-Anglican-Church-Moose-Factory.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Moosonee',
                'url'=> 'https://cdn.britannica.com/07/138607-050-28B2E2DA/Downtown-Moosonee-Ontario.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Niagara Falls',
                'url'=> 'https://www.mustdocanada.com/wp-content/uploads/2018/12/hornblowercruise.jpg',
                'state'=> 'ON',
                ],
                
                ['name'=> 'Niagara-on-the-Lake',
                'url'=> 'https://cdn.britannica.com/63/153863-050-6A35F13B/Blockhouses-Fort-George-Niagara-on-the-Lake-Ontario-Canada.jpg?w=300',
                'state'=> 'ON',
                ],
                
                ['name'=> 'North Bay',
                'url'=> 'https://www.northbay.ca/media/konpiezf/15_businesshomes.jpg?center=0.32,0.65833333333333333&mode=crop&quality=80&width=510&rnd=132791435002500000',
                'state'=> 'ON',
                ],
                
                ['name'=> 'North York',
                'url'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/DowntownNorthYork20150914.jpg/1200px-DowntownNorthYork20150914.jpg',
                'state'=> 'ON'
                ],
                
                ['name'=> 'Oakville',
                'url' =>'https://cdn.britannica.com/25/153925-050-672E2CE4/Downtown-Oakville-Ontario-Canada.jpg?w=300',
                'state'=> 'O',
                ],
                
                ['name'=> 'Orillia',
                'url' =>'https://cdn.britannica.com/91/153891-050-28250B20/Orillia-Stephen-Leacock-Museum-Canada-Ontario-Museum.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Oshawa',
                'url' =>'https://cdn.britannica.com/27/3227-004-45022E59/view-skyline-Toronto-Canada-Lake-Ontario.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Ottawa',
                'url' =>'https://adventures.com/media/19780/s-sunrise-sunset-ottawa-city-canada-buildings-architecture.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Parry Sound',
                'url' =>'https://cdn.britannica.com/07/153907-050-02D9EAAC/Parry-Sound-Ontario-Canada.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Perth',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/a/a8/Perth_ON_1.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Peterborough',
                'url' =>'https://cdn.britannica.com/57/9657-050-3E0AC9A6/lock-Otonabee-River-Ont-Peterborough.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Picton',
                'url' =>'https://cdn.britannica.com/64/123664-004-CF7A11BD/Picton-Ont.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Port Colborne',
                'url' =>'https://cdn.britannica.com/29/153929-050-3246E02A/Welland-Ship-Canal-Port-Colborne-Canada-Ontario.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Saint Catharines',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/7/7d/St._Catharines_Downtown_Centre-ville_de_St._Catharines_%2823904737637%29.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Saint Thomas',
                'url' =>'https://cdn.britannica.com/62/153862-050-32EB8DC1/Elgin-County-Railway-Museum-Saint-Thomas-Canada.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Sarnia-Clearwater',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/a/ae/Sarnia_skyline.JPG',
                'state'=> 'O',
                ],
                ['name'=> 'Sault Sainte Marie',
                'url' =>'https://cdn.britannica.com/08/153908-050-AB7407FD/bridge-background-Sault-Sainte-Marie-Canal-National.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Scarborough',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/e/eb/Scarborough_City_Centre.JPG',
                'state'=> 'O',
                ],
                ['name'=> 'Simcoe',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/3/3b/Collingwood_Ontario_Town_Hall.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Stratford',
                'url' =>'https://cdn.britannica.com/86/115786-004-19748D67/City-hall-Stratford-Ont.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Sudbury',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Sudbury_downtown.JPG/1200px-Sudbury_downtown.JPG',
                'state'=> 'O',
                ],
                ['name'=> 'Temiskaming Shores',
                'url' =>'https://cdn.britannica.com/02/153902-050-6AB8E419/Temiskaming-Shores-Lake-Timiskaming-Ontario-Canada.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Thorold',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/5/5a/Maplehurst.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Thunder Bay',
                'url' =>'https://www.thunderbay.ca/en/resourcesGeneral/feature_double_01.jpg',
                'state'=> 'O',
                ],
                ['name'=> 'Timmins',
                'url' =>'https://www.immigration.ca/wp-content/uploads/2020/04/Ontario_304673878.jpeg',
                'state'=> 'O',
                ],
                ['name'=> 'Toronto',
                'url' =>'https://cdn.britannica.com/93/94493-050-35524FED/Toronto.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Trenton',
                'url' =>'https://cdn.britannica.com/15/154015-050-1623F000/section-Trenton-Quinte-West-Ontario-Canada.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Waterloo',
                'url' =>'https://cdn.britannica.com/93/115793-004-F7ABE710/The-Student-Life-Centre-Waterloo-University-of.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Welland',
                'url' =>'https://cdn.britannica.com/10/154310-050-EFFE98FE/building-Civic-Square-city-hall-library-Ontario.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'West Nipissing',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/d/d9/Sturgeon_Falls_Ontario.JPG',
                'state'=> 'O',
                ],
                ['name'=> 'Windsor',
                'url' =>'https://cdn.britannica.com/94/115794-004-A8342C54/Art-Gallery-of-Windsor-Ont.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'Woodstock',
                'url' =>'https://cdn.britannica.com/64/153864-050-5E6DD62E/Old-Town-Hall-Woodstock-Ontario-Canada.jpg?w=300',
                'state'=> 'O',
                ],
                ['name'=> 'York',
                'url' =>'https://media.istockphoto.com/id/1286059927/photo/view-in-north-york-with-autumn-leaves-on-a-sunny-day-in-ontario-canada.jpg?s=612x612&w=0&k=20&c=46wgh3uJWF9SfO-281hOo0f10zvM0MMtq_Drf6hlYLM=',
                'state'=> 'O',
                ],
                ['name'=> 'Borden',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/3/34/Confederation_Bridge_-_panoramio_%281%29.jpg',
                'state'=> 'P',
                ],
                ['name'=> 'Cavendish',
                'url' =>'https://cdn.britannica.com/33/153933-050-38DC79AF/Green-Gables-Cavendish-Canada-Prince-Edward-Island.jpg?w=300',
                'state'=> 'P',
                ],
                ['name'=> 'Souris',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/9/98/St_Marys_church_Souris.jpg',
                'state'=> 'P',
                ],
                ['name'=> 'Summerside',
                'url' =>'https://cdn.britannica.com/95/115795-004-D82427F4/Summerside-PEI.jpg?w=300',
                'state'=> 'P',
                ],
                ['name'=> 'Asbestos',
                'url' =>'https://static01.nyt.com/images/2020/10/20/multimedia/20xp-asbestos/merlin_178776993_118b11f3-bf85-4eac-9164-524f501b8a64-superJumbo.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Baie-Comeau',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/a/a3/Baie-Comeau.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Beloeil',
                'url' =>'https://cdn.britannica.com/82/153882-050-0A1F4912/Richelieu-River-Beloeil-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Cap-de-la-Madeleine',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/2/2f/Madeline_Du_Cap.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Chambly',
                'url' =>'https://cdn.britannica.com/25/141125-050-881B9138/Fort-Chambly-National-Historic-Park-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Charlesbourg',
                'url' =>'https://cdn.britannica.com/79/155279-050-E15C16D7/Charles-Borromeo-Church-city-Charlesbourg-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Châteauguay',
                'url' =>'https://cdn.britannica.com/76/155276-050-A25C5E49/town-hall-Chateauguay-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Chibougamau',
                'url' =>'https://cdn.britannica.com/92/155292-050-8D142D68/town-hall-Chibougamau-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Côte-Saint-Luc',
                'url' =>'https://cdn.britannica.com/72/155272-050-5D01BD31/town-hall-Cote-Saint-Luc-Canada-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Dorval',
                'url' =>'https://cdn.britannica.com/82/155282-050-8F1DFEB0/Terminal-Montreal-Pierre-Elliott-Trudeau-International-Airport-Dorval.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Gaspé',
                'url' =>'https://cdn.britannica.com/01/117101-050-D186A164/Gaspe-Que.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Gatineau',
                'url' =>'https://cdn.britannica.com/83/93683-050-1F641FE3/Canadian-Museum-of-Civilization-Gatineau-Que.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Granby',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/b/bc/Granby-Rue_Principale-1.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Havre-Saint-Pierre',
                'url' =>'https://cdn.britannica.com/80/155280-050-20D00891/shore-Havre-Saint-Pierre-Gulf-of-St-Lawrence-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Hull',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/9/99/Hull_sunset.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Jonquière',
                'url' =>'https://cdn.britannica.com/90/142390-050-A3FB8D02/Jonquiere-aluminum-Quebec-Arvida-Bridge.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Kuujjuaq',
                'url' =>'https://cdn.britannica.com/90/155290-004-D6E10EF2/Kuujjuaq-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'La Salle',
                'url' =>'https://cdn.britannica.com/84/155284-050-F4AF9E76/Fleming-Mill-La-Salle-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'La Tuque',
                'url' =>'https://cdn.britannica.com/71/155271-050-2566D779/Saint-Maurice-River-La-Tuque-Canada-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Lachine',
                'url' =>'https://cdn.britannica.com/69/155269-050-BB304374/warehouse-Stone-The-Fur-Trade-Lachine-National.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Laval',
                'url' =>'https://www.momwithfive.com/wp-content/uploads/2022/05/Laval-1.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Lévis',
                'url' =>'https://d3d0lqu00lnqvz.cloudfront.net/media/media/1024px-Ville_de_L%C3%A9vis01.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Longueuil',
                'url' =>'https://cdn.britannica.com/04/138604-050-60F6F66B/Longueuil-St-Lawrence-River-banks-Canada-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Magog',
                'url' =>'https://cdn.britannica.com/85/155285-050-7940BFED/Magog-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Montreal',
                'url' =>'https://cdn.britannica.com/13/93713-050-C7A67655/Montreal.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Montréal-Nord',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Montr%C3%A9al-Nord.jpg/1200px-Montr%C3%A9al-Nord.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Percé',
                'url' =>'https://cdn.britannica.com/20/117120-050-3D91F3A9/Perce-background-Rocher-Perce-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Port-Cartier',
                'url' =>'https://cdn.britannica.com/67/155267-050-809166EC/Port-Cartier-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Quebec',
                'url' =>'https://assets3.thrillist.com/v1/image/3120392/1200x630/flatten;crop_down;webp=auto;jpeg_quality=70',
                'state'=> 'Q',
                ],
                ['name'=> 'Rimouski',
                'url' =>'https://wanderingwagars.com/wp-content/uploads/2021/09/Things-to-do-in-Rimouski-Quebec-Feature.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Rouyn-Noranda',
                'url' =>'https://cdn.britannica.com/35/25835-004-BC5A3688/Copper-mines-Rouyn-Noranda-Que.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Saguenay',
                'url' =>'https://cdn.britannica.com/56/32756-050-98E14C57/Saguenay-River-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Saint-Eustache',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/c/c6/Saint-Eustache_2.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Saint-Hubert',
                'url' =>'https://cdn.britannica.com/15/155715-050-DBF2ED55/Church-Longueuil-Saint-Hubert-Canada-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Sainte-Anne-de-Beaupré',
                'url' =>'https://cdn.britannica.com/38/9538-050-016E3E99/Basilica-Que-Sainte-Anne-de-Beaupre.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Sainte-Foy',
                'url' =>'https://cdn.britannica.com/74/155274-050-82DF50CA/Laval-University-Louis-Jacques-Casault-Pavilion-city-Quebec-Sainte-Foy.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Sainte-Thérèse',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/e/e9/Coll%C3%A8ge_Lionel-Groulx_%28entr%C3%A9e_du_vieux_s%C3%A9minaire%29.jpg',
                'state'=> 'Q',
                ],
                ['name'=> 'Sept-Îles',
                'url' =>'https://cdn.britannica.com/29/9429-004-1AC414FB/Fishing-boats-Moisie-River-Quebec-Sept-Iles.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Sherbrooke',
                'url' =>'https://cdn.britannica.com/89/155289-004-B49DB8DD/town-hall-Sherbrooke-Quebec-Canada.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Sorel-Tracy',
                'url' =>'https://cdn.britannica.com/28/122828-004-4925C2B9/port-Sorel-Tracy-Que.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Trois-Rivières',
                'url' =>'https://cdn.britannica.com/54/127154-050-B997F411/monastery-Ursuline-Trois-Rivieres-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Val-d’Or',
                'url' =>'https://cdn.britannica.com/14/155714-050-12EAA866/Russian-Orthodox-church-Val-dOr-Canada-Quebec.jpg?w=300',
                'state'=> 'Q',
                ],
                ['name'=> 'Waskaganish',
                'url' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1GxeCIf3sD9y7UQKdcrkLDZaNmL4ULwlPp-LnMheFqEbHRPW1QXBJINOjL6MUSP2ImGc&usqp=CAU',
                'state'=> 'Q',
                ],
                ['name'=> 'Batoche',
                'url' =>'https://cdn.britannica.com/20/155720-050-965AA9AF/Metis-Cemetery-village-background-church-Saskatchewan-Canada.jpg?w=300',
                'state'=> 'S',
                ],
                ['name'=> 'Cumberland House',
                'url' =>'https://globalnews.ca/wp-content/uploads/2017/07/cpt116414744_high.jpg?quality=85&strip=all',
                'state'=> 'S',
                ],
                ['name'=> 'Estevan',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/20161210_151014_v3.jpg/800px-20161210_151014_v3.jpg',
                'state'=> 'S',
                ],
                ['name'=> 'Flin Flon',
                'url' =>'https://cdn.britannica.com/28/153928-050-186528DE/Flin-Flon-Manitoba-Canada.jpg?w=300',
                'state'=> 'S',
                ],
                ['name'=> 'Moose Jaw',
                'url' =>'https://cdn.britannica.com/43/155743-050-89D4A148/City-hall-Moose-Jaw-Saskatchewan-Canada.jpg?w=300',
                'state'=> 'S',
                ],
                ['name'=> 'Prince Albert',
                'url' =>'https://rabotatam.ru/uploads/gallery/album_417/gallery_2_417_79405.jpg',
                'state'=> 'S',
                ],
                ['name'=> 'Regina',
                'url' =>'https://cdn.britannica.com/18/154818-050-C23EDFFB/Dusk-Regina-Wascana-Lake-Canada-Saskatchewan.jpg?w=300',
                'state'=> 'S',
                ],
                ['name'=> 'Saskatoon',
                'url' =>'https://cdn.britannica.com/63/115763-050-D9F817B0/Saskatoon-South-Saskatchewan-River-Sask.jpg?w=300',
                'state'=> 'S',
                ],
                ['name'=> 'Uranium City',
                'url' =>'https://upload.wikimedia.org/wikipedia/commons/b/b0/Main_Street_Fog.jpg',
                'state'=> 'S',
                ],
                ['name'=> 'Dawson',
                'url' =>'https://cdn.britannica.com/86/7086-050-D1D657AB/Dawson-bank-Yukon-River-territory.jpg?w=300',
                'state'=> 'Y',
                ],
                ['name'=> 'Watson Lake',
                'url' =>'https://cdn.britannica.com/12/138612-050-06C94BF6/Sign-Post-Forest-Watson-Lake-Yukon.jpg?w=300',
                'state'=> 'Y',
                ],
                ['name'=> 'Whitehorse',
                'url' =>'https://cdn.britannica.com/13/122313-004-D8CFB840/Whitehorse-Yukon.jpg?w=300',
                'state'=> 'S',
                ],
            ];
            foreach($groups_names as $group ){
                $oldgroup = Group::where('name', $group['name'])->where('state', $group['state'])->first();
                
                if (!$oldgroup) {
                    $newGroup = new Group();
                    $newGroup->name = $group['name'];
                    $newGroup->state = $group['state'];
                    $newGroup->save();
                    $newGroup->addMediaFromUrl($group['url'])->toMediaCollection('group_images');
                    

            
                }
    
            }
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function addParticipant(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group_validate = Group::find($request->group_id);

            if (!$group_validate) {
                return $this->ErrorResponse('Group not found', null, null);
            }

            $group = GroupUser::where('group_id', $request->group_id)->where('user_id', auth()->id())->first();
            if ($group) {
                return $this->ErrorResponse('User is already added in this group!', null, null);
            }

            $newUser = new GroupUser();
            $newUser->group_id = $request->group_id;
            $newUser->user_id = auth()->id();
            $newUser->save();
            return $this->SuccessResponse('Added Succesfully.', [
                'groupUser' => $newUser
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function list(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $limit = $request->limit ? $request->limit : 20;
            $user = User::find(auth()->id());
            $groups = $user->groups()->paginate($limit);
            return $this->SuccessResponse($this->dataRetrieved, [
                'groups' => $groups
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'limit'         => 'nullable|numeric',
            'is_global'     => 'nullable|boolean',
            'name'          => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {
            $deactivatedUsersIds = $this->deactivatedUserIds();
            $limit = $request->limit ? $request->limit : 20;

            $isGlobal = $request->is_global;
            $searchTerm = $request->name;

            $groupsQuery = Group::query();

            if ($isGlobal) {
                // Search all groups by name
                $groupsQuery->where('name', 'LIKE', '%' . $searchTerm . '%');
            } else {
                // Search within joined groups by name
                $groupsQuery->where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->whereHas('users', function ($query) use ($deactivatedUsersIds) {
                        $query->where('users.id', auth()->id());
                        $query->whereNotIn('users.id', $deactivatedUsersIds);
                    });
            }

            // Add a subquery to order the results by joined groups on top and unjoined groups at the bottom
            $groupsQuery->orderByRaw('(SELECT COUNT(*) FROM group_users WHERE group_users.group_id = groups.id AND group_users.user_id = ' . auth()->id() . ') DESC');

            $groups = $groupsQuery->paginate($limit);

            // If the number of retrieved records is less than the limit and the search is not global,
            // search within unjoined groups to complete the remaining records
            if ($groups->count() < $limit && !$isGlobal) {
                $unjoinedGroupsQuery = Group::where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->whereDoesntHave('users', function ($query) use ($deactivatedUsersIds) {
                        $query->where('users.id', auth()->id());
                        $query->whereNotIn('users.id', $deactivatedUsersIds);
                    })
                    ->orderBy('created_at', 'desc')
                    ->take($limit - $groups->count())
                    ->paginate($limit - $groups->count());

                $groups = $groups->concat($unjoinedGroupsQuery);
            }

            return $this->SuccessResponse($this->dataRetrieved, [
                'groups' => $groups
            ]);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function leave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group = Group::where('id', $request->group_id)->first();
            if (!$group) {
                return $this->ErrorResponse('Group not found!', null, null);
            }

            $groupUser = GroupUser::where('group_id', $request->group_id)->where('user_id', auth()->id())->first();
            if (!$groupUser) {
                return $this->ErrorResponse('User is not added in this group!', null, null);
            }

            $user = User::find(auth()->id());
            $user->groups()->detach($request->group_id);
            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    // Delete group
    public function destroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->ErrorResponse($this->validationError, $validator->errors(), null);
        }

        try {

            $group = Group::where('id', $request->group_id)->first();
            if (!$group) {
                return $this->ErrorResponse('Group not found!', null, null);
            }
            // Delete GroupUsers
            $group->users()->detach();

            // Delete Posts and associated Comments
            $group->posts()->each(function ($post) {
                $post->comments()->delete();
                $post->delete();
            });

            // Delete Group and associated media
            $group->delete();

            return $this->SuccessResponse($this->dataDeleted, null);
        } catch (\Exception $e) {
            return $this->ErrorResponse($this->jsonException, $e->getMessage(), null);
        }
    }

    public function destroy_web($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();

        return redirect()->back()->with('success', 'Group deleted successfully.');
    }

    public function edit_web($id)
    {
        $group = Group::findOrFail($id);

        return view('groups.edit', compact('group'));
    }

    public function update_web(Request $request, $id)
    {
        $group = Group::findOrFail($id);

        $group->name = $request->input('name');
        $group->state = $request->input('state');
        $group->save();
        $url = $request->input('url');
        // Update other properties as needed
        if($url != null) {
            $group->addMediaFromUrl($url)->toMediaCollection('group_images');

        }


        return redirect()->back()->with('success', 'Group updated successfully.');
    }

}
