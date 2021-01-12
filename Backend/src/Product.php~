<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=256, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="imageSource", type="string", length=1000, nullable=false)
     */
    private $imageSource;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=false)
     */
    private $disponible;

    /**
     * @var string
     *
     * @ORM\Column(name="plateforme", type="string", length=256, nullable=false)
     */
    private $plateforme;


    /**
     * Get idProduct.
     *
     * @return int
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Product
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set imageSource.
     *
     * @param string $imageSource
     *
     * @return Product
     */
    public function setImageSource($imageSource)
    {
        $this->imageSource = $imageSource;

        return $this;
    }

    /**
     * Get imageSource.
     *
     * @return string
     */
    public function getImageSource()
    {
        return $this->imageSource;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set disponible.
     *
     * @param bool $disponible
     *
     * @return Product
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible.
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set plateforme.
     *
     * @param string $plateforme
     *
     * @return Product
     */
    public function setPlateforme($plateforme)
    {
        $this->plateforme = $plateforme;

        return $this;
    }

    /**
     * Get plateforme.
     *
     * @return string
     */
    public function getPlateforme()
    {
        return $this->plateforme;
    }
    /**
     * @var double
     *
     * @ORM\Column(name="prix", type="double", nullable=false)
     */
    private $prix;


    /**
     * Set prix.
     *
     * @param \double $prix
     *
     * @return Product
     */
    public function setPrix(\double $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return \double
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
