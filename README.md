### ˼�ǽݿƼ� refinephp ���ʹ��˵��

- refinephp ��һ�����easyswoole�Ŀ��ٿ�����php��ܣ���ԭ�е�easyswoole�Ļ�������ǿ�˶�ʱ��������Ͷ�ݵȹ��ܣ��������ò��������������·�ɲ������Լ�reqeust��response�Ȳ����ĸ����ԺͰ�ȫ�ԣ���ȫ����easyswoole�ڵ����з���  ������Բ鿴easyswoole�ٷ��ĵ�

refinephp ������˵��
-------------

### Controller ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Controller ` 
                    
> �̳��� EasySwoole\Http\AbstractInterface\Controller

#### �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| public  | index()  | ��  | easyswoole �涨�̳��Կ���������ʵ��index����  |
| public  | session($key,$value)  | key,value  | ��ȡsession������session��ֵ  |
| public  | appResult($info,$data,$err)  | info,data,err  | ͳһapp����ֵ,info ����˵�� data������ err�Ƿ���ȷ  |
| public  | appJson($data,$code)  |data,code  | ��ӦJSON����,codeĬ����200  |
| public  | initialize()  |�� | ȫ�������¼�������Ȩ�޿�������������������ɣ�����false������ִ�к���ĳ��� ����true����ִ��  |
| public  | onRequest()  |�� | ��д��easyswoole��onRequest()�¼�����ǿ��context���ܣ�������������д���������ʵ��initialize()�¼�����  |
| public  | onException()  |�� | ��д��easyswoole��onException�¼����������������,ͳһ����json��ʽ������Ϣ  |
| public  | _emtpy($action)  |action | δ���󵽷����ղ�������,����ɸ���ҵ����Ҫ�Զ���ʵ��  |

#### �����б�

|  ���� | ������  |  ʵ�ַ��� |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
|  Protected | $context  |  method��get�ȵ� | ����������������Ļ��� ��������ɲ鿴�·�Context��  |
|  Protected | $_session  |  set��get�ȵ� | ԭ����easyswoole��session ����ɲ鿴�ٷ�session�ĵ�  |


### ViewController ��
                
----
#### �����ռ䣺` szjcomo\szjcore\ViewController `
                    
> �̳��� szjcomo\szjcore\Controller ģ��������õ�think-template �������ǰ��˷������Ŀ ��ֱ�Ӽ̳�Controller�� ���ؼ̳д��� ֻ�����õ�View������²ż̳д���

####   �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| public  | fetch($template)  | ģ��·��  | Ѱ�Ҹ�Ŀ¼��templates�µ�ģ���ļ�  |

#### �����б�

|  ���� | ������  |  ʵ�ַ��� |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
|  Protected | $view  |  assign�ȵ� | ����ɲ鿴thinkphp template�ٷ�˵��  |

### Cache ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Cache `
                    
> ֻ������С�ͻ���ϵͳ,������Ҫ�����Ļ����½�����memcache ��redis  ��������ǿ��get ��set���� ��������ȡ���������� �����ڴ�Ļ���ϵͳ С�ͻ���ϵͳ���ر��ʺ�

####   �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| static  | get($key)  |  $key |  ��ȡ����,�������key keyΪ����ʱΪ������ȡ |
| static  | set($key,$value,$expire)  |  $key,$value,$expire | ���û���,$expireΪ���ù���ʱ�䣬���������û��� key��value������Ϊ���� valueΪnullʱɾ������  |
| static  | del($key)  |  $key | ɾ������  |
| static  | clear()  |  �� | ��ջ���  |
| static  | keys()  |  �� | ��ȡ���л����±�  |
| static  | count()  |  �� | ��ȡ���л������  |
| static  | getExpire($key)  |  $key | ��ȡһ��key�Ĺ���ʱ��  |


### Config ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Config `
                    
> ����easyswoole Config������� ������׼��easyswoole�ٷ��ĵ�����һ��

####   �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| static  | get($key)  |  $key |  ��ȡ���� |
| static  | set($key,$value)  |  $key,$value | ��̬��������  |

### Context ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Context `
                    
> ����ǿ���context����,��Ҫ�Ƕ�����İ�ȫ�Եı���Խ��з�װ ����ʹ�������Controller��context����ʹ�� ��easyswoole�ٷ���request��response����ǿ��������

####   �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| public  | method()  |  �� |  ��ȡ��������ķ��� |
| public  | isGet()  |  �� | �Ƿ�get����  |
| public  | isPost()  |  �� | �Ƿ�post����  |
| public  | isPut()  |  �� | �Ƿ�put����  |
| public  | isDelete()  |  �� | �Ƿ�delete����  |
| public  | put()  |  �� | ��ȡput���������  |
| public  | uploads($inputName,$options)  |  $inputName,$options | �ļ��ϴ����ܣ����������¿�  |
| public  | uploadsHandler($uploadFile,$options,$fileName)  |  $uploadFile,$options,$fileName | �ļ��ϴ�����,���uploads������������ʱ��ֱ�ӵ��ô˷���  |
| public  | getFileNameExt($fileName)  | $fileName | ��ȡ�ļ�����׺  |
| public  | get($key,$default,$filter)  | $key,$default,$filter | ��ȡget������� ���key��ȡΪ�ջ򲻴棬ֱ�ӷ���$default��ֵ������������Ϊ���˺���  |
| public  | post($key,$default,$filter)  | $key,$default,$filter | ��ȡpost������� ���key��ȡΪ�ջ򲻴棬ֱ�ӷ���$default��ֵ������������Ϊ���˺���  |
| public  | param($key,$default,$filter)  | $key,$default,$filter | ��ȡget/post������� ���key��ȡΪ�ջ򲻴棬ֱ�ӷ���$default��ֵ������������Ϊ���˺���  |
| public  | getip()  | �� | �ɻ�ȡԶ���û�IP  |
| public  | cookie($key,$value,$expire)  | $key,$value,$expire | ��ȡ������cookie  |
| public  | header($name,$value)  | $key,$value | ��ȡ������headerͷ��Ϣ  |
| public  | redirect($url)  | $url | �ض���  |
| public  | _servers()  | ��| $_SERVER |

### Task ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Task `
                    
> �̳���AbstractAsyncTask,ʹ�ø������������ģ�����ͣ������Ҫʹ�ü򵥵���,����ֱ��ʹ��callable�ļ�Ͷ������ķ�ʽ ������鿴�ٷ��ĵ�,������Ҫ����ǿ�˹ٷ�������Ͷ�ݹ����в��ܴ��ݲ������ƣ�ʹ�ñ�����Դ��ݲ����Լ���������Ͷ�ݵĸ����� �����಻֧��finish���� ��Ϊ���˾��ñ�Ҫ�Բ���,����Ϊ�첽�����ʵ�� �����Ҫͬ������ ��鿴�ٷ��ĵ�

####   �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| static  | addTask($callback,$params,$className)  | $callback,$params,$className |  $callback �ǻص��������� string $params�ǲ��� Ĭ������Ϊ�� $callName ������ص������� Ĭ��Ϊ\App\common\ExtendsCallback string���� |

#### �����б�

|  ���� | ������  |  ʵ�ַ��� |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
|  static | $callbackClass  |  ��(����ʵ��) | ��Ϊ��̬���ԣ��������Ҫָ����,������addTask��ָ��$className�������ܱ�֤ȫ�ֲ�����  |


### Times ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Timers `
                    
> ��ʱ���࣬��ǿ�˹ٷ��Ķ�ʱ�����ܣ����˶�ʱ�����������ԣ�Ҳ֧�ֶ�ʱ�в�������,�������ṩ�ķ����Ϳ���֪�� ��javascript�еĶ�ʱ���÷�һ�� ������һ�� ��Ҫ�Ƿ���ʹ��

####   �����б�

|  ���� | ��������   |   ����˵�� |
| ------------ | ------------ | ------------ |
| static  | setInterval($callback = null,$microSeconds = 5000,$params = [],$callbackClass = null)  |   $callback �ǻص��������� ����Ϊһ�������������� $microSeconds����ʱ���Ժ���Ϊ��λ Ĭ��5000 $params ��Ҫ���ݵĲ���  $callbackClassĬ��Ϊ\App\common\ExtendsCallback string���ͣ��˷�������һ����ʱ��ID ����ִ�� |
| static  | clearInterval($tmId)  | ���һ����ʱ��   |
| static  | setTimeout($callback = null,$microSeconds = 5000,$params = [],$callbackClass = null)  | �������÷���setIntervalһ�� ��鿴setInterval˵�� ִֻ��һ��   |

#### �����б�

|  ���� | ������  |  ʵ�ַ��� |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
|  static | $callbackClass  |  ��(����ʵ��) | ��Ϊ��̬���ԣ��������Ҫָ����,�����ڶ�ʱ��$callbackClass������ָ���������ܱ�֤ȫ�ֲ�����  |

### Mysql ��
                
----
#### �����ռ䣺` szjcomo\szjcore\Mysql `
                    
> ��װ��һ��DB���� ��table���� ��Ҫ�Ǽ�д������ ������easyswoole����һ�� Ҳ���̳߳ز���

####   �����б�

|  ���� | ��������   | ����˵��  |  ����˵�� |
| ------------ | ------------ | ------------ | ------------ |
| static  | DB()  |  �� |  ����һ��mysql���õ��̳߳����ӣ����Զ����л��� |
