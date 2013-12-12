<?php
 /*
 *  @version Special Arguments v1.0
 *  @autor Adam Berger$
 *  Copyright 2013 Special Arguments
 *  <ber34@o2.pl>
 *  Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 
 
    If you do not know how many parameters we pass to the constructor, we can do it this way.
    We do not need to interfere in the same class each time when we add another parameter.
    Suppose that we have a car that does not know how many people will travel
    and we want to pass to the constructor, each time a different number of people.
    Are we about contained in the class rules say that it is a new design pattern Special Arguments.
    Please send your feedback by email  <ber34@o2.pl>



     Jeżeli nie wiemy ile parametrów będziemy przekazywać do konstruktora możemy zrobić to w ten sposób.
     Nie musimy ingerować w samą klasę za każdym razem kiedy dopisujemy kolejny parametr.
 	 Załóżmy że mamy samochód w którym nie wiemy ile osób będzie podróżować,
  	 a chcemy przekazać do konstruktora, za każdym razem inną ilość osób.
   	 Czy możemy o zawartych w klasie regułach powiedzieć, że jest nowym wzorcem projektowym Special Arguments.
	 Prześlijcie wasze opinie na email <ber34@o2.pl>
 
 */
  class special_arguments{
       public $person = array();
     
    public function __construct(){
      if($arg = func_num_args()>0){
         $this->person = func_get_args();
      }
     }
     
      public function car(){
        return $this->person;
     }
    }
  

