<?php
/**
 * Created by PhpStorm.
 * User: Frecuency
 * Date: 24/01/2017
 * Time: 16:12
 */
namespace BlogBundle\Repository;
use BlogBundle\Entity\Tag;
use BlogBundle\Entity\EntryTag;
use Doctrine\ORM\Tools\Pagination\Paginator;
class EntryRepository extends \Doctrine\ORM\EntityRepository
{
    public function saveEntryTags($tags=null,$title=null,$category=null,$user=null,$entry=null){
        $em = $this->getEntityManager();
        $tag_repo=$em->getRepository("BlogBundle:Tag");
        if($entry== null){
            $this->findOneBy(array(
                "title"=>$title,
                "category"=>$category,
                "user"=>$user

            ));
        }else{

        };
        //$tags.=",";
        $tags=explode(",",$tags);
        foreach($tags as $tag){
            dump($tags);
            $isset_tag = $tag_repo->findOneBy(array("name"=>$tag));
            if(count($isset_tag)==0){
                $tag_obj = new Tag();
                $tag_obj->setName($tag);
                $tag_obj->setDescription($tag);
                if(!empty(trim($tag))){
                    $em->persist($tag_obj);
                    $em->flush();
                }
            }
            $tag = $tag_repo->findOneBy(array("name"=>$tag));
            $entryTag= new EntryTag();
            $entryTag->setEntry($entry);
            $entryTag->setTag($tag);
            $em->persist($entryTag);
            $em->flush();

        }
        $flush=$em->flush();
        return $flush;
    }

    public function getPaginateEntries($pageSize=5,$currentPage=1){
        $em = $this->getEntityManager();
        $dql= "SELECT e FROM BlogBundle\Entity\Entry e Order By e.id ASC ";

        $query=$em->createQuery($dql)
            ->setFirstResult($pageSize*($currentPage-1))
            ->setMaxResults($pageSize);

        $paginator = new Paginator($query, $fechJoinCollection = true);

        return $paginator;
    }

    public function getCategoryEntries($category,$pageSize=5,$currentPage=1){
    $em = $this->getEntityManager();
        $dql= "SELECT e FROM BlogBundle\Entity\Entry e Where e.category = :category Order By e.id ASC ";
        $query=$em->createQuery($dql)
            ->setParameter("category",$category)
            ->setFirstResult($pageSize*($currentPage-1))
            ->setMaxResults($pageSize);
        $paginator = new Paginator($query, $fechJoinCollection = true);

        return $paginator;
    }
}