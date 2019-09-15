*Welcome, and thank you for contributing to this project. Please take your time to study this document carefully before making any changes to the codebase, to ensure you're on the same page with the rest of the team and we can all collaborate seamlessly.*   

# Workflow
This project uses the [Fork & Pull Model](https://help.github.com/en/articles/about-collaborative-development-models) 
for receiving contributions. Read about the Fork & Pull Model 
[here](https://help.github.com/en/articles/about-collaborative-development-models).          
Your group leads will create a fork where all of your group's work will live. Individual contributions in each of these forks will be made in accordance with the [GitHub Flow](https://guides.github.com/introduction/flow/). 
Read about it [here](https://guides.github.com/introduction/flow/).     
More indepth git flow article [here](https://nvie.com/posts/a-successful-git-branching-model/).     
Group leads will be responsible for creating working branches for each memeber as tasks are assigned. This means that you'd usually have no reason to create a branch on your own.    

## Branch Structure
### Upstream
The main / original / upstream (hereinafter upstream) repository will have only two (2) branches - master and develop. Additional hotfix branches may be created to work on critical bugs in the deployment.    
__'*develop*' - The Integration branch.__ This is where features from the different forks are brought together. Group leads, submit your pull requests here. This is the default branch. An integration team will be responsible for bringing it all together and resolving any possible merge conflicts that may arise.        
__'*master*' - The deployment branch.__ The code on this branch goes live to our hosting servers and must be kept in pristine condition. When the integration (develop) branch reaches a milestone, the deployment (master) branch is updated via pull request.       
__Hotfix branches.__ In the event that a bug slips past the integration team and makes it into deployment, a hotfix branch is created off of *master*. Prefix hotfix branch names with "hf__". On completion, this branch is merged with master, and also with *develop* so the fixes are reflected in all future deployments.

### Forks
Each fork represents work on a specific feature or bugfix. A group is assigned a fork and works together to complete the feature. Forked repositories should be renamed to include a suffix with double underscores that describes what feature is being worked on. Example: workflow-test-repo__feature-name.       
__Feature branch.__ Once a fork is created, a feature branch is made. This is where all of the group members' individual work is brought together. When the feature is completed, a pull request is made from this feature branch to the upstream *develop* branch. Feature branches are name with the "ft__" prefix, with double underscores, for easy identification. The branch name should correspond with the suffix added to the repository name. Example: ft__feature-name.         
__Working branch.__ This is where initial work gets done. The feature for a fork is broken down into small tasks which are distributed among group members. A branch is created for each group member to work on their task. The name of a working branch should correspond with the Slack display name of the person assigned to this task. Working branch names should begin with an "@" and all spaces should be replaced with a dash. Example: @Feranmi-Akinlade.

### Staying Updated
When working with large teams on the same codebase, sometimes others make changes that affect your work. While great care has been taken to create a modular team workflow to keep this to a minimum, merge conflicts are inevitable. It would _suck_ to finish working on a task or feature, only to find that the codebase has evolve and you need to rework everything to conform to the new changes. This is managed in two ways.       
__*First*__, check with the integration team before making changes to the codebase. This means that the details of how your group will implement it's assigned feature must be approved by the integration team before work begins. This is to ensure that you do not make changes that will adversely affect the work of others. GitHub has a handy feature for this - _[issues](https://help.github.com/en/articles/about-issues)_. Group leads should _[create an issue](https://help.github.com/en/articles/creating-an-issue)_ and _[label it](https://help.github.com/en/articles/applying-labels-to-issues-and-pull-requests)_ with 'feature' or 'bugfix' as appropriate. When you create an issue, it is automatically tracked on the teams _[project board](https://help.github.com/en/articles/about-project-boards)_. Your group should only begin coding when the implementation details have been finalized. Keep the issue open as long as work continues on the feature. All discussions regarding a feature are done under this issue. Your pull request is linked with the corresponding issue when work is completed, by adding "*closes #{number}*" to the pull request description on GitHub. Replace {number} with the appropriate issue number e.g _closes #5_.       
__*Second*__, each team member needs to make sure that at every given time, their working directory is up-to-date with the latest changes from the upstream *develop* branch. This is achieved with a two-fold process.       
#### Group Leads - Pulling Upstream
*This section only applies to group/sub-team leads.*       
After setting up your fork on github and cloning it locally on your system, you'll need to run a command just once to create a connection between your local repository and the remote upstream repository. Note that there's automatically a remote 'origin' repository set up when you clone. This points to your fork. Now you need to set up 'upstream' which will point to the central upstream repo.

0. Open a terminal and go into the directory for the newly cloned repo. Now add the upstream remote like so:        
    <pre>git remote add upstream git://github.com/TEAM-NAME/REPO-NAME.git</pre>    

Now you're all set up.       
__*The following steps must be run periodically to keep your work, and that of your entire sub-team up-to-date! You can run these commands as often as every hour. You want to fetch any new changes as soon as possible. Each time you want to begin working, or take a break from your work, run these first.*__

1. Switch to the develop branch        
    <pre>git checkout develop</pre>     
2. Get all remote (online) upstream changes into your local computer.        
    <pre>git fetch upstream</pre>     
3. Merge changes fetched with your local develop branch. ('develop' must be the currently checked-out branch)       
    <pre>git merge upstream/develop</pre>    
4. Push the newly merged changes to your fork's remote (online) repo. This is configured as 'origin' by default.    
    <pre>git push origin develop</pre>      

Recall that your group works on a feature branch. So now you need to update that too.

5. Switch to your feature branch.        
    <pre>git checkout ft__your-feature-name</pre>        
6. Now make sure your local feature branch is up-to-date with any work your group members have done.        
    ```
      git fetch origin       
      git merge origin/ft__your-feature-name
    ```
    *You may encounter merge conflicts here.
    [Resolve them](https://help.github.com/en/articles/resolving-a-merge-conflict-using-the-command-line),
    then come back and complete the merge. If you merge often enough, any conflicts would be trivial and very few.*

7. Merge the changes on the newly merged develop branch, into your feature branch.        
    <pre>git merge develop</pre>
    *You may encounter merge conflicts here.
    [Resolve them](https://help.github.com/en/articles/resolving-a-merge-conflict-using-the-command-line),
    then come back and complete the merge. If you merge often enough, any conflicts would be trivial and very few.*

8. Finally, push your newly merged feature branch to the remote github server so your group members can get updated as well.        
    <pre>git push origin ft__your-feature-name</pre>      
9. Now return to your working branch.        
    <pre>git checkout @your-slack-username</pre>      

Continue with the steps in the next section.

#### All Team Members - Pulling Origin
*Your group/sub-team lead has the responsibility of keeping your forked repo updated on the remote github server. All you need to do is get those changes unto your local computer.*       
Your local repository automatically has a remote 'origin' set up when you clone. This points to the online repository you cloned unto your system. You will be pushing your work to 'origin' to back it up online.       
__*The following steps must be run periodically to keep your work up-to-date. You can run these commands as often as every hour. You want to fetch any new changes as soon as possible. Each time you want to begin working, or take a break from your work, run these first.*__       
Be sure to 
[stash](https://dev.to/neshaz/how-to-git-stash-your-work-the-correct-way-cna) 
or commit all changes first.  

1. Switch to the feature branch        
    <pre>git checkout ft__your-feature-name</pre>          
2. Get all remote (online) 'origin' changes into your local computer.        
    <pre>git fetch origin</pre>      
3. Merge changes fecthed with your local feature branch. (The local feature branch must be the currently checked-out branch. See step 1 above.)        
    <pre>git merge origin/ft__your-feature-name</pre>      
4. Next, switch to your working branch.        
    <pre>git checkout @your-slack-username</pre>      
5. Merge the changes on the newly merged feature branch, into your working branch. You may run 'git branch' to confirm which branch you're about to merge into.        
    <pre>git merge ft__your-feature-name</pre>
    *You may encounter merge conflicts here.
    [Resolve them](https://help.github.com/en/articles/resolving-a-merge-conflict-using-the-command-line),
    then come back and complete the merge. If you merge often enough, any conflicts would be trivial and very few.*    

6. Finally, push your newly merged working branch to the remote github server for back up.        
    <pre>git push origin @your-slack-user-name</pre>      

## Code Structrure & Readability


