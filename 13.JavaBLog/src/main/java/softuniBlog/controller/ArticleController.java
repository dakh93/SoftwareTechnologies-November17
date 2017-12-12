package softuniBlog.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import softuniBlog.bindingModel.ArticleBindingModel;
import softuniBlog.entity.Article;
import softuniBlog.entity.User;
import softuniBlog.repository.ArticleRepository;
import softuniBlog.repository.UserRepository;

@Controller
public class ArticleController {
    @Autowired
    private ArticleRepository articleRepo;
    @Autowired
    private UserRepository userRepo;


    @GetMapping("/article/create")
    @PreAuthorize("isAuthenticated()")
    public String create(Model model){

        model.addAttribute("view", "article/create");
        return "base-layout";
    }

    @PostMapping("/article/create")
    @PreAuthorize("isAuthenticated()")
    public String createProcess(ArticleBindingModel articleBindingModel){
        UserDetails user = (UserDetails) SecurityContextHolder.getContext()
                .getAuthentication().getPrincipal();

        User userEntity = this.userRepo.findByEmail(user.getUsername());
        //CREATING ARTICLE
        Article articleEntity = new Article(
                articleBindingModel.getTitle(),
                articleBindingModel.getContent(),
                userEntity
        );
        //UPLOADING TO DATABASE
        this.articleRepo.saveAndFlush(articleEntity);

        return "redirect:/";

    }

    @GetMapping("/article/{id}")
    public String details(Model model, @PathVariable Integer id){
        if (!this.articleRepo.exists(id)){
            return "redirect:/";
        }
        Article article = this.articleRepo.findOne(id);

        model.addAttribute("article", article);
        model.addAttribute("view", "article/details");
        return "base-layout";
    }
    //EDIT IF YOU ARE LOGGED AND AUTHOR OF IT
    @GetMapping("article/edit/{id}")
    @PreAuthorize("isAuthenticated()")
    public String edit(@PathVariable Integer id, Model model){
        UserDetails user = (UserDetails) SecurityContextHolder.getContext()
                .getAuthentication().getPrincipal();
        User userEntity = this.userRepo.findByEmail(user.getUsername());

        if (!this.articleRepo.exists(id) || userEntity.getId() != id ){
            return "redirect:/";
        }
        Article article = this.articleRepo.findOne(id);

        model.addAttribute("view", "article/edit");
        model.addAttribute("article", article);

        return "base-layout";
    }

    @PostMapping("/article/edit/{id}")
    @PreAuthorize("isAuthenticated()")
    public String editProcess(@PathVariable Integer id, ArticleBindingModel articleBindingModel){
        if (!this.articleRepo.exists(id)){
            return "redirect:/";
        }
        Article article = this.articleRepo.findOne(id);
        article.setContent(articleBindingModel.getContent());
        article.setTitle(articleBindingModel.getTitle());

        this.articleRepo.saveAndFlush(article);

        return "redirect:/article/" + article.id;
    }

    @GetMapping("/article/delete/{id}")
    @PreAuthorize("isAuthenticated()")
    public String delete(Model model, @PathVariable Integer id){
        UserDetails user = (UserDetails) SecurityContextHolder.getContext()
                .getAuthentication().getPrincipal();
        User userEntity = this.userRepo.findByEmail(user.getUsername());

        if (!this.articleRepo.exists(id) || userEntity.getId() != id ){
            return "redirect:/";
        }
        Article article = this.articleRepo.findOne(id);

        model.addAttribute("view", "article/delete");
        model.addAttribute("article", article);

        return "base-layout";
    }

   @PostMapping("/article/delete/{id}")
    @PreAuthorize("isAuthenticated()")
    public String deletePost(@PathVariable Integer id){
       UserDetails user = (UserDetails) SecurityContextHolder.getContext()
               .getAuthentication().getPrincipal();
       User userEntity = this.userRepo.findByEmail(user.getUsername());

       if (!this.articleRepo.exists(id) || userEntity.getId() != id ){
           return "redirect:/";
       }
       Article article = this.articleRepo.findOne(id);
        this.articleRepo.delete(article);
        return "redirect:/";
   }
}
